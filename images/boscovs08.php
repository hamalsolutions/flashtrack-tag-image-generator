<?php //   1       2       3      4     5
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, 'BLACK');
    $SIZE = asignar(2, 'S');
    $STYLE = asignar(3, 'TSBNKY11B');
    $UPC = asignar(4, '885347132467');
    $PRICE = asignar(5, '20.00');

    // Creacion del formato
    formato(150, 325, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);
    $vicsColor = colorVic($SIZE);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $logo = fuente('boscovsLogo.ttf');

    // Introducimos los datos

    texto('B', 0, 55, 1, 0, $logo, $black, 30, 0, 0);

    texto($STYLE, 9, 75, 0, 0, $arial, $black, 7, 0, 0);

    texto($COLOR, 0, 75, 2, 10, $arial, $black, 7, 0, 0);

    cajaRellena(1, 155, 147, 25, $vicsColor, $vicsColor);
    texto($SIZE, 0, 175, 2, 15, $arialBold, $black, 15, 0, 0);

    texto('-- - - - - - - - - - - - - - - - --', 0, 280, 1, 0, $arial, $black, 10, 0, 0);

    texto($PRICE, 0, 310, 1, 0, $arial, $black, 14, 0, 1);


    // Creacion del Barcode
    barcode($UPC, 10, 75, 1.1, 60, 'UPC');

    barcodeTexto(3, 0, -1, 5, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
