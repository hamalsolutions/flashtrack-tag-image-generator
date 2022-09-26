<?php //      1        2       3      4           5           6              7          8
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE', 'GROUP NAME', 'PCS-SET', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'D16539PYN');
    $COLOR = asignar(2, 'C052N RUST');
    $UPC = asignar(3, '190475098432');
    $SIZE = asignar(4, 'L');
    $GROUP_NAME = asignar(5, ' ');
    $PCS_SET = asignar(6, ' ');
    $COMPARE_PRICE = asignar(7, '14.99');
    $PRICE = asignar(8, '12.00');

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

    // Introducimos los datos
    texto('E', 114, 32, 0, 0, $logo, $black, 24, 0, 0);

    texto($STYLE, 10, 70, 0, 0, $arialBold, $black, 6, 0, 0);

    texto($COLOR, 0, 70, 2, 10, $arialBold, $black, 6, 0, 0);

    texto($SIZE, 0, 185, 1, 0, $arialNBold, $black, 12, 0, 0);

    texto($GROUP_NAME, 0, 230, 1, 0, $arialBold, $black, 8, 0, 0);

    texto($PCS_SET, 0, 250, 1, 0, $arialBold, $black, 8, 0, 0);

    texto($COMPARE_PRICE, texto('COMPARE AT:', puntoCentrado('COMPARE AT:   ' . $COMPARE_PRICE, $arialBold, 9), 260, 0, 0, $arialBold, $black, 9, 0, 0) - 12, 260, 0, 0, $arialBoldSlash, $black, 9, 0, 1);

    texto($PRICE, 0, 315, 1, 0, $arialBold, $black, 14, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 18, 80, 1, 60, 'UPC');

    barcodeTexto(2, -1, -1, 5, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
