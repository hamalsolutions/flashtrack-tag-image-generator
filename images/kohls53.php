<?php //   1     2       3      4      5      6     7      8
$correctos = array('QTY', 'COLOR', 'ITEM', 'DEPT', 'CLASS', 'SUB', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, '309 MILTRY GRN');
    $ITEM = asignar(2, '1TAT4356SFR');
    $DEPT = asignar(3, '153');
    $CLASS = asignar(4, '20');
    $SUB = asignar(5, '21');
    $SIZE = asignar(6, 'XLARGE');
    $UPC = asignar(7, '884411992860');
    $PRICE = asignar(8, '24.00');

    // Creacion del formato
    formato(225, 75, 255, 255, 255);
    setAsSticker(10);

    // Colores a usar
    $black = color(0, 0, 0);
        
    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialNarrow = fuente('arialn.ttf');
    $arialNarrowBold = fuente('arialnb.ttf');
    $logo = fuente('KohlsLogo-B.ttf');
    // Introducimos los datos

    texto('k', 15, 15, 0, 0, $logo, $black, 14, 90, 0);

    texto('Kohls.com', 15, 23, 0, 0, $arialNarrow, $black, 6, 90, 0);

    texto($COLOR, 0, 10, 3, -20, $arialNarrow, $black, 7, 0, 0);

    texto('STYLE ' . $ITEM, 0, 19, 3, -17, $arialNarrow, $black, 7, 0, 0);

    texto($DEPT, 0, 30, 3, 35, $arialNarrow, $black, 7, 0, 0);

    texto($CLASS, 0, 30, 3, -15, $arialNarrow, $black, 7, 0, 0);

    texto($SUB, 0, 30, 3, -65, $arialNarrow, $black, 7, 0, 0);

    texto($PRICE, 0, 218, 1, 0, $arialNarrow, $black, 12, 90, 1);

    texto('SIZE ' . $SIZE, 0, 35, 1, 0, $arialNarrowBold, $black, 8, 90, 0);


    // Creacion del Barcode
    barcode($UPC, 65, 33, 1, 30, 'UPC');

    barcodeTexto(.6, 0, -6, 6, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>
