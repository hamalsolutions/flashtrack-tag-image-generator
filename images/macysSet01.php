<?php //   1       2      3      4
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'PCS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'STYLE');
	$COLOR = asignar(2, 'COLOR');
	$SIZE = asignar(3, 'SIZE');
	$PCS = asignar(4, '2PC');

	// Creacion del formato
	formato(150, 325, 255, 255, 255, 90);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrow = fuente('arialn.ttf');

	// Introducimos los datos

	agujero(75, 25);

	//texto('E',10,37,0,0,$logo,$black,27,90,0);

	texto($STYLE, 0, 95, 1, 0, strlen($STYLE) > 10 ? $arialNarrow : $arialBold, $black, strlen($STYLE) > 12 ? 9 : 10, 0, 0);

	texto($COLOR, 0, 125, 1, 0, strlen($COLOR) > 10 ? $arialNarrow : $arialBold, $black, strlen($COLOR) > 12 ? 9 : 10, 0, 0);

	texto($SIZE, 0, 155, 1, 0, $arialBold, $black, 10, 0, 0);

	texto($PCS, 0, 185, 1, 0, $arialBold, $black, 10, 0, 0);

	require_once('../includes/footer.php');
}
?>
