<?php //   1      2       3
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'KQM1865030');
	$COLOR = asignar(2, 'BLACK/GOLD');
	$SIZE = asignar(3, '7');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('STYLE:', 20, 45, 0, 0, $arialNBold, $black, 10, 0, 0);
	texto($STYLE, 70, 45, 0, 0, $arial, $black, 10, 0, 0);

	texto('COLOR:', 20, 75, 0, 0, $arialNBold, $black, 10, 0, 0);
	texto($COLOR, 70, 75, 0, 0, $arial, $black, 10, 0, 0);

	texto('SIZE:', 20, 110, 0, 0, $arialNBold, $black, 12, 0, 0);
	texto($SIZE, 70, 110, 0, 0, $arialBold, $black, 12, 0, 0);

	// Creacion del Barcode

	require_once('../includes/footer.php');
}
?>