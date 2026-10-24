<?php
/**
 * Make the locked Picqer barcode package (v0.3) parse on PHP 8.
 *
 * Picqer v0.3 still uses PHP 5/7 curly-brace string offsets such as
 * $code{$i}. Those are a parse error on PHP 8, so an otherwise successful
 * `composer install` leaves a vendor tree that cannot load BarcodeGenerator.
 *
 * This script is intentionally small and conservative:
 *   - replaces curly-brace offsets with square-bracket offsets
 *   - removes the deprecated imagedestroy() call from BarcodeGeneratorPNG
 *   - is safe to run repeatedly
 *
 * It is invoked by the Composer post-install-cmd and post-update-cmd hooks.
 * Run it manually with:
 *
 *     php scripts/fix-picqer-php8.php
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$vendor = $root . '/vendor/picqer/php-barcode-generator/src';

$generator = $vendor . '/BarcodeGenerator.php';
$pngGenerator = $vendor . '/BarcodeGeneratorPNG.php';

if (!is_file($generator)) {
    fwrite(STDERR, "Picqer is not installed at {$generator}.\n");
    fwrite(STDERR, "Run `composer install` first, then run this script again.\n");
    exit(1);
}

$source = file_get_contents($generator);
if ($source === false) {
    fwrite(STDERR, "Could not read {$generator}.\n");
    exit(1);
}

/*
 * Match a variable with optional simple array access, followed by a
 * curly-brace offset. Examples handled:
 *
 *   $code{$i}                         -> $code[$i]
 *   $chr[$char]{$j}                   -> $chr[$char][$j]
 *   $seq[1]{$i}                       -> $seq[1][$i]
 *   $code{($i + 1)}                   -> $code[($i + 1)]
 *   $upce_code{$i}                    -> $upce_code[$i]
 */
$pattern = '/(\$[A-Za-z_][A-Za-z0-9_]*(?:\[[^\[\]]*\])*)\{([^{}]+)\}/';
$patched = preg_replace($pattern, '$1[$2]', $source, -1, $replacements);

if ($patched === null) {
    fwrite(STDERR, "Could not patch {$generator}: " . preg_last_error_msg() . "\n");
    exit(1);
}

if ($replacements > 0) {
    if (file_put_contents($generator, $patched) === false) {
        fwrite(STDERR, "Could not write {$generator}.\n");
        exit(1);
    }
    echo "Picqer: converted {$replacements} curly-brace offset(s).\n";
} else {
    echo "Picqer: no curly-brace offsets remain.\n";
}

// The PNG generator calls imagedestroy(), which is deprecated in PHP 8.5.
// Removing the call is safe: PHP releases the image when the object goes away.
if (is_file($pngGenerator)) {
    $pngSource = file_get_contents($pngGenerator);
    if ($pngSource === false) {
        fwrite(STDERR, "Could not read {$pngGenerator}.\n");
        exit(1);
    }

    $pngPatched = preg_replace(
        '/^([ \t]*)imagedestroy\(\$png\);[ \t]*$/m',
        '$1unset($png);',
        $pngSource
    );

    if ($pngPatched === null) {
        fwrite(STDERR, "Could not patch {$pngGenerator}: " . preg_last_error_msg() . "\n");
        exit(1);
    }

    if ($pngPatched !== $pngSource) {
        if (file_put_contents($pngGenerator, $pngPatched) === false) {
            fwrite(STDERR, "Could not write {$pngGenerator}.\n");
            exit(1);
        }
        echo "Picqer: removed deprecated imagedestroy() call.\n";
    }
}

// Fail loudly if a curly-brace offset is still present after patching.
$remaining = file_get_contents($generator);
if ($remaining !== false && preg_match($pattern, $remaining)) {
    fwrite(STDERR, "Picqer still contains a curly-brace offset after patching.\n");
    exit(1);
}

echo "Picqer is PHP 8 compatible.\n";
