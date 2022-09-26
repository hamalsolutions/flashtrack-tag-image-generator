<?php //     1       2
$correctos = array('QTY', 'UPC', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $UPC = asignar(1, '637677604318');
    $SIZE = asignar(2, 'SMALL');

    // Creacion del formato
    formato(150, 150, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos
    texto($SIZE, 0, 135, 1, 0, $arialBold, $black, 10, 0, 0);

    // Creacion del Barcode
    barcode($UPC, 18, 24, 1, 79, 'UPC');

    barcodeTexto(2, 0, -1, 4, 'arialbd.ttf');

    require_once('../includes/footer.php');
}
?>