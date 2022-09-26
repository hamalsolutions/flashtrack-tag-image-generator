<?php //    1    2      3        4      5     6       7
$correctos = array('QTY', 'DEPT', 'SUB', 'CLASS', 'VENDOR', 'SKU', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '5');
	$SUB = asignar(2, '508');
	$CLASS = asignar(3, '3');
	$VENDOR = asignar(4, '25516');
	$SKU = asignar(5, '492058');
	$SIZE = asignar(6, 'S/P');
	$PRICE = asignar(7, '$29');

	// Creacion del formato
	formato(138, 300, 255, 255, 255, 0);
	agujero(69, 25);

	// Colores a usar
	$black = color(0, 0, 0);
	$yellow = color(255, 230, 0);

	// Fuentes a usar
	$logo = fuente('GiantTiger_Logo.ttf');
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$ITCFranklin = fuente('ITCFranklinGLTM.ttf');

	// Introducimos los datos
	cajaRellena(1, 250, 137, 50, $yellow, $yellow, 0);

	texto('G', 0, 34, 2, 8, $logo, $black, 19, 0, 0);
	texto($DEPT, 10, 50, 0, 0, $arialBold, $black, 11, 0, 0);
	texto($SUB . ' ' . $CLASS, 24, 49, 0, 0, $arialBold, $black, 8.5, 0, 0);

	texto($VENDOR, 10, 70, 0, 0, $arialBold, $black, 8.5, 0, 0);

	lineaHorizontal(10, 164, 118, $black, 1);
	lineaHorizontal(10, 194, 118, $black, 1);

	texto('SIZE /', 10, 176, 0, 0, $arialBold, $black, 8, 0, 0);
	texto('TAILLE', 10, 190, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($SIZE, 56, 184, 0, 0, $arialBold, $black, 10, 0, 0);

	texto('OUR PRICE / NOTRE PRIX', 0, 263, 1, 0, $arialBold, $black, 7, 0, 0);
	texto($PRICE, 0, 290, 1, 0, $ITCFranklin, $black, 16, 0, 1);

	// Creacion del Barcode
	barcode($SKU, 34, 92, 1, 47, '128', 0);
	texto($SKU, 0, 152, 1, 0, $arial, $black, 10, 0, 0);

	require_once('../includes/footer.php');
}
?>
