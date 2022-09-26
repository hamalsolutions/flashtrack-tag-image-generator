<?php //                     1          2           3       4          5             6          7       8         9            10        11           12
$correctos = array('QTY', 'STYLE', 'COLOR CODE', 'COLOR', 'DEPT', 'MAJOR CLASS', 'SUB CLASS', 'SIZE', 'SIZE2', 'PRODUCT NAME', 'UPC', 'GENDER CODE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'DSM300120V');
	$COLOR_CODE = asignar(2, '296');
	$COLOR = asignar(3, 'OATMEAL HEATHER');
	$DEPT = asignar(4, '097');
	$MAJOR_CLASS = asignar(5, '40');
	$SUB_CLASS = asignar(6, '41');
	$SIZE = asignar(7, '12');
	$SIZE2 = asignar(8, 'months');
	$PRODUCT_NAME = asignar(9, 'fleece Crew');
	$UPC = asignar(10, '012345678905');
	$GENDER_CODE = asignar(11, 'INFANT BOYS');
	$PRICE = asignar(12, '12.99');

	// Creacion del formato
	formato(380, 93.8, 255, 255, 255, 90);

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
	$Logo2 = fuente('JumpingBeans_logo2.ttf');

	// Introducimos los datos
	$yPos = 130;
	for ($i = 1; $i <= 3; $i++) {
		texto($SIZE, 0, $yPos, 1, 0, $arialBold, $black, 12, 270, 0);
		If (strlen($SIZE2) <> 0) {
			texto($SIZE2, 0, $yPos + 10, 1, 0, $arialNBold, $black, 8, 270, 0);
			$yPos += 10;
		}
		texto($PRODUCT_NAME, 0, $yPos + 12, 1, 0, $arialNBold, $black, 8, 270, 0);
		$yPos += 28;
	}
	texto('1', 3.75, 115, 0, 0, $Logo2, $orange, 94, 270);
	texto('2', 5, 115, 0, 0, $Logo2, $green, 94, 270);
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
		case 'INFANT BOYS':
			$char = 'c';
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
		case 'INFANT GIRLS':
			$char = 'g';
			break;
		default:
			$char = 'Z';
			$colorChar = $red;
	}
	texto($char, 4, 115, 0, 0, $Logo2, $colorChar, 94, 270);

	texto('SIZE  ' . $SIZE, 50, 11, 0, 0, $arialNBold, $black, 7, 0, 0);

	texto($COLOR_CODE, 50, 26, 0, 0, $arialNBold, $black, 5.5, 0, 0);

	texto($COLOR, 76, 26, 0, 0, $arialNBold, $black, 5.5, 0, 0);

	texto('STYLE', 50, 35, 0, 0, $arialNBold, $black, 5.5, 0, 0);

	texto($STYLE, 76, 35, 0, 0, $arialNBold, $black, 5.5, 0, 0);

	$DEP_MCL_SCL = $DEPT . '         ' . $MAJOR_CLASS . '         ' . $SUB_CLASS;

	texto($DEP_MCL_SCL, 0, 44, 3, 206, $arialBold, $black, 5.5, 0, 0);

	texto($GENDER_CODE, 0, 89, 3, 206, $arialBold, $black, 5.5, 0, 0);

	texto('- - - - - - - - - - - - - - -', 1, 360, 0, 0, $arial, $black, 8, 270, 0);

	texto($PRICE, 0, 374, 1, 0, $arial, $black, 11, 270, 1);

	// Creacion del Barcode
	barcode($UPC, 30, 48, 1, 24, 'UPC', 0);

	barcodeTexto(1, -1, -4, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>