# Flashtrack Tag Image Generator

PHP 8.5 label image generator.

## Requirements

- PHP **8.5.12**
- PHP extensions: `gd` (with FreeType), `mbstring`, `curl`, `json`, `zip`
- Composer 2.x
- Linux x86-64 for the provided `genbarcode` binary

## Setup

### 1. Install PHP 8.5 and extensions

Debian/Ubuntu example:

```bash
sudo apt update
sudo apt install php8.5-cli php8.5-fpm php8.5-gd php8.5-mbstring php8.5-curl php8.5-xml php8.5-zip unzip
php -v
php -m | grep -E 'gd|mbstring|curl'
```

### 2. Install Composer dependencies

From the project root:

```bash
composer install --no-dev --prefer-dist --optimize-autoloader
```

If Composer is not installed:

```bash
curl -sS https://getcomposer.org/installer | php
php composer.phar install --no-dev --prefer-dist --optimize-autoloader
```

The install hook runs `scripts/fix-picqer-php8.php`, which patches the pinned Picqer v0.3 package for PHP 8. If you install with `--no-scripts`, run it manually:

```bash
php scripts/fix-picqer-php8.php
```

Use `composer install`, not `composer update`, so the versions in `composer.lock` stay pinned.

### 3. Create `.env`

```bash
cp .env.example .env
```

Set:

```env
FONT_PATH=/var/www/html/labels/fonts/
GENBARCODE_PATH=/usr/local/bin/genbarcode
```

- `FONT_PATH`: absolute path to the fonts directory; **must end with `/`**.
- `GENBARCODE_PATH`: absolute path to the barcode executable.

### 4. Install the barcode binary

```bash
chmod +x genbarcode
sudo cp genbarcode /usr/local/bin/genbarcode
sudo chmod +x /usr/local/bin/genbarcode
```

Verify:

```bash
/usr/local/bin/genbarcode 123456789012 EAN13
```

The included binary is Linux x86-64. On another architecture, replace it with a compatible build.

### 5. Serve the app

The project root must be the web root.

Local:

```bash
php -S 0.0.0.0:8080 -t /var/www/html/labels
```

Production: point the Nginx/Apache document root to the project root and run PHP 8.5-FPM.

### 6. Test

```bash
./test-routes.sh http://localhost:8080
```

Open the route tester:

```text
http://localhost:8080/demo.html
```

Or open a label directly:

```text
http://localhost:8080/images/5d36411fb9dd1a9caca5628169281c71-rfidDillards02r1.php?sample=2
```

Expected: `HTTP 200`, `Content-Type: image/png`, PNG `150 x 325`.

## Environment variables

| Variable | Required | Example |
| --- | --- | --- |
| `FONT_PATH` | yes | `/var/www/html/labels/fonts/` |
| `GENBARCODE_PATH` | yes | `/usr/local/bin/genbarcode` |

## Composer notes

- `composer.json` and `composer.lock` are both required.
- Use `composer install` for deployment.
- The bundled `composer.phar` is Composer 2.2.18; use a current Composer 2.x if possible.
- The Picqer fix is applied automatically by the Composer hooks.

## Known broken templates

These three files contain pre-existing PHP parse errors and are excluded from the route tests:

```text
images/0b317d107e9d44b08ebe5aa2c020e77c-rfidWalmart41.php
images/459679587f2dcdd8bce269707ae27b68-rfidDillards17.php
images/63cb1f38bd8983507251a2fb245d3fa7-fredmeyerstk.php
```
