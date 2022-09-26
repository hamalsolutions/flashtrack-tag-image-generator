<?php //     1       2       3      4       5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'PRICE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, '104-2719');
    $COLOR = asignar(2, 'BLACK');
    $SIZE = asignar(3, 'SMALL');
    $PRICE = asignar(4, '185.00');
    $UPC = asignar(5, '889365037766');

    // Creacion del formato
    formato(188, 72, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $logo = fuente('EPC_Logo.ttf');

    // Introducimos los datos
    texto('E', 10, 39, 0, 0, $logo, $black, 13.5, 0, 0);

    texto($STYLE, 28, 20, 0, 0, $arial, $black, 8, 0, 0);

    texto($COLOR, 0, 20, 2, 15, $arial, $black, 8, 0, 0);

    texto($SIZE, 28, 67, 0, 0, $arial, $black, 8, 0, 0);

    texto($PRICE, 0, 67, 2, 15, $arial, $black, 8, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 20, 20, 1.3, 26, 'UPC');

    barcodeTexto(.45, -2, -5, 7, 'OCR-B_SB.ttf');

    require_once('../includes/footer.php');
}
?>
