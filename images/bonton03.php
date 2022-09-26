<?php //     1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, '7510113');
    $COLOR = asignar(2, 'Black');
    $SIZE = asignar(3, 'S');
    $UPC = asignar(4, '716068588663');
    $PRICE = asignar(5, '20.00');

    // Creacion del formato
    formato(200, 200, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');

    // Introducimos los datos
    setAsSticker(15);

    texto($STYLE, 72, 28, 0, 0, $arial, $black, 9, 0, 0);
    texto('STYLE', 20, 28, 0, 0, $arial, $black, 9, 0, 0);

    texto($COLOR, 72, 48, 0, 0, $arial, $black, 9, 0, 0);
    texto('COLOR', 20, 48, 0, 0, $arial, $black, 9, 0, 0);

    texto($SIZE, 55, 70, 0, 0, $arial, $black, 9, 0, 0);
    texto('SIZE', 20, 70, 0, 0, $arial, $black, 9, 0, 0);

    texto($PRICE, 0, 189, 1, 0, $arial, $black, 12, 0, 0);

    // Creacion del Barcode
    barcode($UPC, 16, 60, 1.4, 100, 'UPC');

    barcodeTexto(1, 0, -4, 6, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>