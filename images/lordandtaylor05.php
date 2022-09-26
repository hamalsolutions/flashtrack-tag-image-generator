<?php //   1       2          3        4     5       6
$correctos = array('QTY', 'STYLE', 'COLOR', 'SEASON', 'UPC', 'SIZE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '3955AG');
	$COLOR = asignar(2, 'BLACK~NOIR');
	$SEASON = asignar(3, 'S/P17-P3~CLASS-61~SPRING-17');
	$UPC = asignar(4, '886349123170');
	$SIZE = asignar(5, 'S/P');
	$PRICE = asignar(6, '$44.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	// $logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	agujero(75, 25);

	//texto('E',0,35,2,10,$logo,$black,24,0,0);

	texto('STYLE/MODÉLE', 0, 65, 1, 0, $arial, $black, 6.5, 0, 0);
	texto($STYLE, 0, 78, 1, 0, $arialBold, $black, 6.5, 0, 0);

	texto('COLOR/COULEUR', 0, 102, 1, 0, $arial, $black, 6.5, 0, 0);
	//texto($COLOR,0,115,1,0,$arialBold,$black,6.5,0,0);

	$COLORS = explode('~', $COLOR);
	$yPosition = 115;
	foreach ($COLORS AS $group) {
		texto($group, 0, $yPosition, 1, 0, $arialBold, $black, 6.5, 0, 0);
		$yPosition += 10;
	}

	$SEASONCLASS = explode('~', $SEASON);
	$yPosition = 148;
	foreach ($SEASONCLASS AS $group) {
		texto($group, 0, $yPosition, 1, 0, $arialBold, $black, 6.5, 0, 0);
		$yPosition += 10;
	}

	texto('SIZE/TAILLE', 0, 250, 1, 0, $arialBold, $black, 7, 0, 0);
	texto($SIZE, 0, 270, 1, 0, $arialBold, $black, 9, 0, 0);

	perforacion(169, 250, 288);

	texto($PRICE, 0, 314, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 180, 1, 40, 'UPC');

	barcodeTexto(1, 0, -5, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
