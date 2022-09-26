<?php //   1       2      3     4
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'TMF69002ME');
	$COLOR = asignar(2, 'HEATHER GREY');
	$SIZE = asignar(3, 'SMALL');
	$UPC = asignar(4, '645618245834');

	// Creacion del formato
	formato(175, 75, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 0, 18, 2, 10, $logo, $black, 14.5, 0, 0);

	//texto('STYLE:',8,10,0,0,$arial,$black,8,0,0);
	texto($STYLE, 10, 18, 0, 0, $arial, $black, 8, 0, 0);

	//texto('COLOR:',10,25,0,0,$arialNarrow,$black,8,0,0);
	texto($COLOR, 10, 35, 0, 0, $arial, $black, 8, 0, 0);

	texto(formatizarUPC_Texto("1 23456 78901 2", $UPC), 10, 50, 0, 0, $arial, $black, 8, 0, 0);

	texto($SIZE, 10, 65, 0, 0, $arial, $black, 7, 0, 0);

	require_once('../includes/footer.php');
}
?>
