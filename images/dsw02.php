<?php //   1           2          3
$correctos = array('QTY', 'CAT', 'COMPARE PRICE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$CAT = asignar(1, '0104');
	$COMPARE = asignar(2, '85.00');
	$PRICE = asignar(3, '34.95');

	// Creacion del formato
	formato(250, 150, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialBoldSlash = fuente('Arial_Narrow_Slash.ttf');

	// Introducimos los datos
	agujero(225, 75);

	texto('CAT', 120, 25, 0, 0, $arial, $black, 9, 0, 0);

	texto($CAT, 150, 25, 0, 0, $arial, $black, 13, 0, 0);

	texto('OUR PRICE', 10, 55, 0, 0, $arialBold, $black, 12, 0, 0);

	texto($PRICE, 0, 80, 3, 150, $arialBold, $black, 16, 0, 1);

	texto('COMPARE AT', 10, 110, 0, 0, $arial, $black, 11, 0, 0);

	texto($COMPARE, 0, 135, 3, 150, $arialBoldSlash, $black, 14, 0, 1);

	require_once('../includes/footer.php');
}
?>
