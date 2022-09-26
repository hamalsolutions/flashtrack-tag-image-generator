<?php //     1      2      3      4      5
$correctos = array('QTY', 'ITEM', 'PRICE', 'UPC', 'SIZE', 'COLOR');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $ITEM = asignar(1, 'FAOHR6BIG');
    $PRICE = asignar(2, '19.50');
    $UPC = asignar(3, '190371625275');
    $SIZE = asignar(4, 'S');
    $COLOR = asignar(5, 'Blue');

    // Creacion del formato
    formato(169, 300, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);

    agujero(85, 25);
    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos

    texto($ITEM, 15, 50, 0, 0, $arialBold, $black, 9, 0, 0);

    texto($SIZE, 0, 195, 2, 20, $arialBold, $black, 24, 0, 0);

    texto($COLOR, 0, 50, 2, 15, $arialBold, $black, 9, 0, 0);

    texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);

    perforacion(169, 300, 250);

    // Creacion del Barcode
    barcode($UPC, 20, 55, 1.1, 75, 'UPC');

    barcodeTexto(1, 0, 1, 4, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
