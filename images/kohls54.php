<?php //   1      2       3      4     5      6      7       8
$correctos = array('QTY', 'COLOR', 'SIZE', 'STYLE', 'UPC', 'SUB', 'PRICE', 'DEPT', 'CLASS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $COLOR = asignar(1, 'TURQUISE');
    $SIZE = asignar(2, 'SMALL');
    $STYLE = asignar(3, '420P73KX');
    $UPC = asignar(4, '637677951771');
    $SUB = asignar(5, '16');
    $PRICE = asignar(6, '20.00');
    $DEPT = asignar(7, '344');
    $CLASS = asignar(8, '12');

    // Creacion del formato
    formato(300, 170, 255, 255, 255, 270);

    agujero(280, 85);

    // Si requiere rotar la imagen ( TODA LA IMAGEN )
    $anguloDeRotacion = 270;

    // Colores a usar
    $black = color(0, 0, 0);
    $white = color(255, 255, 255);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');

    // Introducimos los datos
    texto('KOHL\'S', 0, 52, 1, 0, $arialBold, $black, 17, 270, 0);
    texto('Kohl\'s.com', 0, 65, 1, 0, $arialBold, $black, 8, 270, 0);


    texto($DEPT, 0, 82, 3, 65, $arial, $black, 12, 270, 0);

    texto($CLASS, 0, 82, 1, 0, $arial, $black, 12, 270, 0);

    texto($SUB, 0, 82, 3, -65, $arial, $black, 12, 270, 0);

    texto('STYLE', 75, 123, 0, 0, $arial, $black, 8, 270, 0);
    texto($STYLE, 75, 137, 0, 0, $arial, $black, 8, 270, 0);

    texto('COLOR', 80, 155, 0, 0, $arial, $black, 8, 270, 0);
    texto($COLOR, 75, 170, 0, 0, $arial, $black, 8, 270, 0);

    texto('SIZE', 75, 190, 0, 0, $arial, $black, 8, 270, 0);
    texto($SIZE, 75, 205, 0, 0, $arial, $black, 8, 270, 0);

    texto($PRICE, 0, 290, 1, 0, $arial, $black, 15, 270, 1);


    // Creacion del Barcode
    barcode($UPC, 13, 266, 1.39, 41, 'UPC', 270);

    barcodeTexto(1, -1, -7, 7, 'cour.ttf');

    require_once('../includes/footer.php');
}
?>