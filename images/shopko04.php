<?php //     1      2      3      4     5      6
$correctos = array('QTY', 'DEPT', 'SIZE', 'COLOR', 'SKU', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $DEPT = asignar(1, '184');
    $SIZE = asignar(2, 'Small');
    $COLOR = asignar(3, 'Royal Hth/Black');
    $SKU = asignar(4, '25711789');
    $UPC = asignar(5, '190371692192');
    $PRICE = asignar(6, '19.99');

    // Creacion del formato
    formato(125, 225, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos
    texto('DEPT:', 11, 43, 0, 0, $arialBold, $black, 6, 0, 0);

    texto($DEPT, 48, 43, 0, 0, $arialBold, $black, 6, 0, 0);

    texto('SIZE:', 11, 60, 0, 0, $arialBold, $black, 6, 0, 0);

    texto($SIZE, 41, 61, 0, 0, $arialBold, $black, 6, 0, 0);

    texto('SKU', 11, 112, 0, 0, $arialBold, $black, 6, 0, 0);

    texto('COLOR:', 11, 81, 0, 0, $arialBold, $black, 6, 0, 0);

    parrafo($COLOR, 45, 81, 0, 0, $arialBold, $black, 6, 0, 20, 10);

    texto($SKU, 41, 112, 0, 0, $arialBold, $black, 6, 0, 0);

    texto($PRICE, 0, 215, 1, 0, $arial, $black, 12, 0, 1);

    agujero(62.5, 20);

    // Creacion del Barcode
    barcode($UPC, 5, 125, 1, 55, 'UPC');

    barcodeTexto(1, 0, -3, 5, 'arialbd.ttf');


    require_once('../includes/footer.php');
}
?>
