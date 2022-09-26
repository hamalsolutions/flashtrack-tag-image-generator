<?php //     1      2       3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'DJ725DDP1');
    $COLOR = asignar(2, 'DJ725DDP1');
    $UPC = asignar(3, '123456789012');
    $PRICE = asignar(4, '1 FOR $18 OR 2 FOR $24');
    // Creacion del formato
    formato(200, 150, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);
    $red = color(255, 0, 0);
    $white = color(255, 255, 255);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialNarrow = fuente('arialn.ttf');

    // Introducimos los datos
    texto($STYLE, 10, 22, 0, 0, $arialNarrow, $black, 9, 0, 0);

    texto($COLOR, 0, 22, 2, 5, $arialNarrow, $black, 9, 0, 0);

    texto($PRICE, 0, 130, 1, 0, $arialNarrow, $black, 9, 0, 0);

    // Creacion del Barcode
    barcode($UPC, 20, 30, 1.3, 70, 'UPC');

    barcodeTexto(1, 0, -6, 6, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
