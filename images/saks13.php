<?php //    1       2       3        4        5      6         7           8        9
$correctos = array('QTY', 'DEPT', 'STYLE', 'COLOR', 'COLOR_FR', 'SIZE', 'UPC', 'COMPARE PRICE', 'PRICE', 'SAVINGS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $DEPT = asignar(1, '0923');
    $STYLE = asignar(2, '2651MK');
    $COLOR = asignar(3, 'COLOR');
    $COLOR_FR = asignar(4, 'COLEUR');
    $SIZE = asignar(5, 'SIZE/TAILLE');
    $UPC = asignar(6, '123456789012');
    $COMPARE = asignar(7, '$400.00');
    $PRICE = asignar(8, '$199.99');
    $SAVINGS = asignar(9, '50%');

    // Creacion del formato
    formato(170, 300, 255, 255, 255);

    // Colores a usar
    $black = color(0, 0, 0);
    $red = color(255, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialBoldSlash = fuente('Arial_Slash_bld.ttf');

    // Introducimos los datos
    agujero(84, 25);

    texto($DEPT, 0, 54, 1, 0, $arial, $black, 10, 0, 0);
    texto($STYLE, 0, 70, 1, 0, $arial, $black, 10, 0, 0);

    texto($COLOR . '/ ' . $COLOR_FR, 0, 82, 1, 0, $arial, $black, 8, 0, 0);

    texto($SIZE, 0, 100, 1, 0, $arial, $black, 9, 0, 0);

    texto('COMPARE AT', 0, 165, 1, 0, $arial, $black, 9, 0, 0);
    texto('COMPARABLE A', 0, 178, 1, 0, $arial, $black, 9, 0, 0);

    texto('OUR PRICE', 0, 216, 1, 0, $arialBold, $black, 9, 0, 0);
    texto('NOTRE PRIX', 0, 228, 1, 0, $arialBold, $black, 9, 0, 0);

    texto($PRICE, 0, 242, 1, 0, $arialBold, $black, 9, 0, 0);
    texto($COMPARE, 0, 192, 1, 0, $arialBoldSlash, $black, 9, 0, 0);


    $SAVINGS = str_replace('SAVINGS', '', strtoupper($SAVINGS));

    texto($SAVINGS . ' SAVINGS', 0, 260, 1, 0, $arialBold, $black, 8, 0, 0);

    texto($SAVINGS, texto('ECONOMISEZ', puntoCentrado('ECONOMISEZ ' . $SAVINGS, $arialBold, 8), 280, 0, 0, $arialBold, $red, 8, 0, 0) - 15, 280, 0, 0, $arialBold, $black, 8, 0, 0);


    texto(formatizarTexto('1    23456   78901    2', $UPC), 0, 150, 1, 0, $arial, $black, 9, 0, 0);

    // Creacion del Barcode
    barcode($UPC, 14, 92, 1.2, 42, 'UPC');


    require_once('../includes/footer.php');
}
?>
