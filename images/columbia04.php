<?php //     1      2         3          4     5       6       7
$correctos = array('QTY', 'STYLE', 'UPC', 'DESCRIPTION', 'SIZE', 'DEPT', 'MSRP', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'JM2041-805');
    $UPC = asignar(2, '887921261020');
    $DESCRIPTION = asignar(3, 'Periodic Hunting Chart  s/s Tee');
    $SIZE = asignar(4, 'XXL');
    $DEPT = asignar(5, 'Men/Hommes');
    $PRICE = asignar(6, '11.00');

    // Creacion del formato
    formato(150, 187.5, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialNarrow = fuente('arialn.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos
    texto($STYLE, 0, 22, 1, 0, $arial, $black, 9, 0, 0);

    parrafo($DESCRIPTION, 0, 111, 1, 0, $arialNarrow, $black, 8, 0, 30, 12, FALSE);

    texto($SIZE, 0, 139, 1, 0, $arial, $black, 12, 0, 0);

    texto($DEPT, 0, 157, 1, 0, $arial, $black, 8, 0, 0);

    texto($PRICE, 0, 175, 1, 0, $arial, $black, 8, 0, 1);

    // Creacion del Barcode
    barcode($UPC, 12, 29, 1.1, 58, 'UPC');

    barcodeTexto(1, -1, -2, 5, 'arialbd.ttf');

    require_once('../includes/footer.php');
}
?>
