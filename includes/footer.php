<?php
    $headerSent = FALSE;
    if ($conBarcode)
    {
        require __DIR__ . "/php-barcode.php";
        barcode_print($upcValue,$tipoBarcode,$barcodeSize,'png');
        $headerSent = TRUE;
    }
    
    $img = rotar($img,$anguloDeRotacion);
        
    if ($conRoundCorners) {
       $img = imageCreateCorners($img, FORMAT_WIDTH, FORMAT_HEIGHT, $radioForCorners);
    }
    // Desplegamos la imagen como una PNG usando un header
    if ($headerSent == FALSE && $modoDepurado == FALSE) {
        header("Content-type: image/png");
    }
    
    imagepng($img);

    // imagedestroy() is a no-op since PHP 8.0 and deprecated in 8.5.
?>
