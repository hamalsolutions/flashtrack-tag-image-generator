<?php //                     1        2        3      4       5          6        7
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'GROUP NAME','SEASON');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'CK8120');
    $COLOR = asignar(2, 'SUMMER SONG');
    $SIZE = asignar(3, 'XS');
    $UPC = asignar(4, '193712483732');
    $PRICE = asignar(5, '$54.00');
    $GROUP_NAME = asignar(6, 'MAR FASH FIX 6');
    $SEASON = asignar(7, 'SPR 2');

    // Creacion del formato
    formato(150, 325, 255, 255, 255);
    agujero(75, 25);
    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialNarrowBold = fuente('arialnb.ttf');
    $logo = fuente('EPC_Logo.ttf');

    // Introducimos los datos
    texto('E', 0, 27, 2, 12, $logo, $black, 20, 0, 0);
    texto('STYLE', 8, 76, 0, 0, $arialBold, $black, 7.5, 0, 0);
    texto('COLOR', 0, 76, 2, 8, $arialBold, $black, 7.5, 0, 0);
    If (strlen($STYLE) < 8) {
        texto($STYLE, 8, 90, 0, 0, $arialBold, $black, 7.5, 0, 0);
    } else {
        texto($STYLE, 8, 90, 0, 0, $arialNarrowBold, $black, 7.5, 0, 0);
    }

    If (strlen($COLOR) < 8) {
        texto($COLOR, 0, 90, 2, 8, $arialBold, $black, 7.5, 0, 0);
    } else {
        texto($COLOR, 0, 90, 2, 8, $arialNarrowBold, $black, 7.5, 0, 0);
    }

    // cajaRellena(0, 150, 150, 25, $vicsColor, $vicsColor);
    texto($GROUP_NAME, 0, 104, 1, 0, $arialNarrowBold, $black, 7.5, 0, 0);
    texto($SEASON, 0, 118, 1, 0, $arialNarrowBold, $black, 7.5, 0, 0);
    texto('SIZE  '.$SIZE, 0, 230, 1, 0, $arialBold, $black, 9, 0, 0);

    texto($PRICE, 0, 310, 1, 0, $arialBold, $black, 12, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 18, 130, 1, 69, 'UPC');
    barcodeTexto(2, 0, -3, 7, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
