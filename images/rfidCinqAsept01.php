<?php //                     1        2       3        4        5           6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC','DESCRIPTION', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'ZK5653177');
	$COLOR = asignar(2, 'BLACK/IVO');
	//$COLOR = asignar(2, 'RHUBARB/CAMILLA RED');
	$SIZE = asignar(3, 'XS');
	$UPC = asignar(4, '194945024204');
	$DESCRIPTION = asignar(5, 'TURTLE NECK ATLAS PULLOVER');
	$PRICE = asignar(6, '$365.00');

	// Creacion del formato
	formato(150, 300, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$bogle = fuente('Bogle-Regular.ttf');
	$bogle80 = fuente('Bogle_80.ttf');
	$logo = fuente('cinqasept_logo1.ttf');
	$EPClogo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('c', 0, 70, 1, 0, $logo, $black, 38, 0, 0);
	texto('7', 12, 47, 0, 0, $logo, $black, 22, 0, 0);
	texto('E', 0, 40, 2, 12, $EPClogo, $black, 26, 0, 0);

	if (strlen($DESCRIPTION)>28) {
		texto($DESCRIPTION, 0, 94, 1, 0, $bogle80, $black, 6, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 94, 1, 0, $bogle, $black, 6, 0, 0);
	}

	texto($STYLE, 0, 112, 1, 0, $bogle, $black, 8, 0, 0);

	if (strlen($COLOR)>18) {
		texto($COLOR, 0, 130, 1, 0, $bogle80, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 130, 1, 0, $bogle, $black, 9, 0, 0);
	}

	texto($SIZE, 0, 150, 1, 0, $bogle, $black, 9, 0, 0);

	texto('WWW.CINQASEPT.NYC', 0, 238, 1, 0, $bogle, $black, 7, 0, 0);

	perforacion(150,300,250);

	texto('MSRP $'.str_replace("$","",$PRICE), 0, 275, 1, 0, $bogle, $black, 8.5, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 14, 150, 1.1, 60, 'UPC');
	barcodeTexto(1, -1, -2, 3, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
