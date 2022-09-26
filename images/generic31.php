<?php //         1        2      3       4
$correctos = array('QTY', 'DESCRIPTION', 'SKU', 'COLOR', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $DESCRIPTION = asignar(1, 'chelsey bra');
    $SKU = asignar(2, '12-02-222-01');
    $COLOR = asignar(3, 'black');
    $SIZE = asignar(4, 'xs');

    // Creacion del formato
    formato(150, 100, 255, 255, 255);
    setAsSticker(10);
    // Colores a usar
    $black = color(0, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos

    texto($SKU, 0, 42, 1, 0, $arial, $black, 9, 0, 0);

    texto('color: ' . $COLOR, 0, 65, 1, 0, $arial, $black, 9, 0, 0);

    texto($DESCRIPTION, 0, 20, 1, 0, $arialBold, $black, 9, 0, 0);

    texto('size: ' . $SIZE, 0, 90, 1, 0, $arial, $black, 9, 0, 0);


    require_once('../includes/footer.php');
}
?>