<?php //     1          2         3       4         5           6         7            8        9          10        11
$correctos = array('QTY', 'STYLE', 'COLOR CODE', 'COLOR', 'DEPT', 'MAJOR CLASS', 'SUB CLASS', 'SIZE', 'PRODUCT NAME', 'UPC', 'GENDER CODE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
    // Valores por default para presentar en el formato
    $STYLE = asignar(1, 'DSM300120V');
    $COLOR_CODE = asignar(2, '296');
    $COLOR = asignar(3, 'OATMEAL HEATHER');
    $DEPT = asignar(4, '097');
    $MAJOR_CLASS = asignar(5, '40');
    $SUB_CLASS = asignar(6, '41');
    $SIZE = asignar(7, '2T');
    $PRODUCT_NAME = asignar(8, 'LS TEE');
    $UPC = asignar(9, '191764114710');
	$GENDER_CODE = asignar(10, 'BOYS');
    $PRICE = asignar(11, '12.99');

    // Creacion del formato
    formato(505, 93.8, 255, 255, 255, 90);

    $anguloDeRotacion = 270;
    // Si requiere rotar la imagen ( TODA LA IMAGEN )

    // Colores a usar
    $black = color(0, 0, 0);
    $orange = color(255, 127, 47);
    $green = color(162, 223, 31);
    $grey = color(153, 153, 154);
    $red = color(255, 0, 0);

    // Fuentes a usar
    $arial = fuente('arial.ttf');
    $arialBold = fuente('arialbd.ttf');
    $arialNBold = fuente('arialnb.ttf');
    $logo = fuente('KOHLS_Bioworld_Logo2.ttf');
    $Logo2 = fuente('JumpingBeans_logo2.ttf');

    // Introducimos los datos
    $yPos = 161;
    for ($i = 1; $i <= 3; $i++) {
        texto($SIZE, 0, $yPos, 1, 0, $arialBold, $black, 14, 270, 0);
        $yPos += 15;
        texto($PRODUCT_NAME, 0, $yPos, 1, 0, $arialNBold, $black, 8, 270, 0);
        $yPos += 42;
    }

	texto('1', 3.75, 124, 0, 0, $Logo2, $orange, 94, 270);
	texto('2', 5, 125, 0, 0, $Logo2, $green, 94, 270);
    $char = '';
    $colorChar = $grey;
    switch ($GENDER_CODE) {

        case 'BOYS':
            $char = 'A';
            break;
        case '4-7X BOYS':
            $char = 'B';
            break;
        case 'TODDLER BOYS':
            $char = 'C';
            break;
        case'GIRLS':
            $char = 'D';
            break;
        case '4-7X GIRLS':
            $char = 'E';
            break;
        case 'GIRLS 4-7 SEPARATES':
            $char = 'F';
            break;
        case 'TODDLER GIRLS':
            $char = 'G';
            break;
		case 'BOYS 4-7 SEPARATES':
			$char = 'H';
			break;
        default:
            $char = 'Z';
            $colorChar = $red;
    }
    texto($char, 4, 127, 0, 0, $Logo2, $colorChar, 94, 270);

	texto('SIZE  ' . $SIZE, 154, 11, 0, 0, $arialNBold, $black, 7, 0, 0);

	texto($COLOR, 118, 21, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	//texto($GENDER_CODE, 92.5, 89, 0, 0, $arialBold, $black, 6.5, 0, 0);
	texto($GENDER_CODE, 64, 89, 3, 270, $arialBold, $black, 6.5, 0, 0);

	texto($STYLE, 119, 31, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	texto('STYLE', 87, 31, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	texto('Kohls.com', 47, 20, 0, 0, $arialBold, $black, 5, 0, 0);


    texto('k', 45, 13, 0, 0, $logo, $black, 10, 0);

	texto($DEPT, 88, 40, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	texto($MAJOR_CLASS, 120, 40, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	texto($SUB_CLASS, 146, 40, 0, 0, $arialNBold, $black, 6.5, 0, 0);

	texto($COLOR_CODE, 92, 21, 0, 0, $arialNBold, $black, 6.5, 0, 0);


    texto($PRICE, 0, 497, 1, 0, $arial, $black, 11, 270, 1);

    texto('----------------------------', 1, 480, 0, 0, $arial, $black, 8, 270, 0);

    // Creacion del Barcode
    barcode($UPC, 63, 45, 1, 26, 'UPC', 0);

    barcodeTexto(1, -1, -4, 7, 'arial.ttf');

    require_once('../includes/footer.php');
}
?>