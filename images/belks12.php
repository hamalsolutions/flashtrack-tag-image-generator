<?php //      1      2      3     4           5
$correctos = array('QTY', 'ITEM', 'DESCRIPTION', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $ITEM = asignar(1, 'TS11IRCOR28BL00');
    $DESCRIPTION = asignar(2, 'CORONA DISTRESSED LABEL MENS A-XXL');
    $COLOR = asignar(3, 'ATHLETIC HEATHER');
    $SIZE = asignar(4, 'XXL');
    $UPC = asignar(5, '190371536144');

    // Creacion del formato
    formato(150, 150, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arialNarrow = fuente('arialn.ttf');
    $arialNarrowBold = fuente('arialnb.ttf');


    // Introducimos los datos
    texto($SIZE, 0, 75, 2, 5, $arialNarrowBold, $black, 8, 0, 0);

    texto($COLOR, 8, 75, 0, 0, $arialNarrowBold, $black, 8, 0, 0);

    texto($ITEM, 8, 30, 0, 0, $arialNarrowBold, $black, 8, 0, 0);

    parrafo($DESCRIPTION, 8, 45, 0, 0, $arialNarrow, $black, 7, 0, 25, 10);

    // Creacion del Barcode
    barcode($UPC, 13, 78, 1.1, 52, 'UPC');

    barcodeTexto(1.5, 0, 0, 4, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
