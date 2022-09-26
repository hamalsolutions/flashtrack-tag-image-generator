<?php //    1        2     3     4       5
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, 'BLK');
    $SIZE = asignar(2, 'Small');
    $STYLE = asignar(3, 'TS11IRCOR24BL00');
    $UPC = asignar(4, '190371536106');
    $PRICE = asignar(5, '24.00');

    // Creacion del formato
    formato(169, 300, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialNarrowBold = fuente('arialnb.ttf');
    // Introducimos los datos
    agujero(85, 25);

    texto('BIOWORLD MERCHANDISING', 15, 55, 0, 0, $arialNarrowBold, $black, 9, 0, 0);

    texto($STYLE, 0, 80, 1, 0, $arialNarrowBold, $black, 9, 0, 0);

    texto($COLOR, 0, 100, 1, 0, $arialNarrowBold, $black, 9, 0, 0);


    texto('Size:', 35, 125, 0, 0, $arialBold, $black, 8, 0, 0);
    texto($SIZE, 65, 125, 0, 0, $arialBold, $black, 10, 0, 0);

    texto($PRICE, 0, 275, 1, 0, $arialNarrowBold, $black, 16, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 15, 115, 1.2, 100, 'UPC');

    barcodeTexto(3, -1, 0, 5, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
