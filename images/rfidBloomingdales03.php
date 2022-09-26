<?php //                     1        2       3       4            5           6
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'TA 10417');
    $COLOR = asignar(2, 'OFF WHITE');
    $UPC = asignar(3, '811723020790');
    $SIZE = asignar(4, 'S');
    $COMPARE_PRICE = asignar(5, '70.00');
    $PRICE = asignar(6, '34.99');

    // Creacion del formato
    formato(150, 325, 255, 255, 255);
    agujero(75, 25);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
    $arialNBold = fuente('arialnb.ttf');
    $logo = fuente('EPC_Logo.ttf');
    $brand_logo = fuente('b.ttf');
    // Introducimos los datos
    texto('E', 0, 32, 2, 12, $logo, $black, 20, 0, 0);
    texto('4', 0, 81, 1, 0, $brand_logo, $black, 14, 0, 0);

    texto($STYLE, 0, 120, 1, 0, $arialBold, $black, 9, 0, 0);
    texto($COLOR, 0, 140, 1, 0, $arialBold, $black, 9, 0, 0);
    texto($SIZE, 0, 235, 1, 0, $arialNBold, $black, 10, 0, 0);
    //$COMPARE = 'COMPARE AT:  '.$COMPARE_PRICE;
    //texto($COMPARE, 0, 260, 1, 0, $arialNBold, $black, 8, 0, 1);
    texto($COMPARE_PRICE, texto('COMPARE AT:', puntoCentrado('COMPARE AT:         ' . $COMPARE_PRICE, $arialBold, 8), 260, 0, 0, $arialBold, $black, 9, 0, 0) - 14, 260, 0, 0, $arialBoldSlash, $black, 9, 0, 1);
    texto($PRICE, 0, 314, 2, 12, $arialBold, $black, 12, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 18, 156, 1, 40, 'UPC');

    barcodeTexto(2, -1, -1, 5, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
