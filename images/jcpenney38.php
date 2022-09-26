<?php //   1      2       3      4      5
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, 'DUSTY ROSE');
    $SIZE = asignar(2, 'X-SMALL');
    $STYLE = asignar(3, 'H885J412');
    $UPC = asignar(4, '617134259268');
    $PRICE = asignar(5, '29.00');
    //$LOT = asignar(6,'2547');

    // Creacion del formato
    formato(169, 300, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos

    if (strlen($COLOR) < 13) {
        texto($COLOR, 0, 60, 2, 15, $arial, $black, 7, 0, 0);
        texto($STYLE, 10, 60, 0, 0, $arial, $black, 7, 0, 0);
    } else {
        texto($COLOR, 0, 60, 2, 5, $arial, $black, 6, 0, 0);
        texto($STYLE, 10, 60, 0, 0, $arial, $black, 6, 0, 0);
    }


    texto('SIZE', 0, 200, 1, 0, $arialBold, $black, 14, 0, 0);
    texto($SIZE, 0, 230, 1, 0, $arialBold, $black, 14, 0, 0);


    texto('-- - - - - - - - - - - - - - - - - - - --', 0, 255, 1, 0, $arialBold, $black, 10, 0, 0);

    texto($PRICE, 0, 285, 1, 0, $arialBold, $black, 16, 0, 1);


    // Creacion del Barcode
    barcode($UPC, 13, 65, 1.2, 95, 'UPC');

    barcodeTexto(1, 0, -4, 6, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
