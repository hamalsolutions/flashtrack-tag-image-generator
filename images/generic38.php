<?php
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'SIZE', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {

	$STYLE = asignar(1, '18-4004421-SW001139');
	$DESCRIPTION = asignar(2, 'NILANIA');
	$SIZE = asignar(3, 'XXS');
	$UPC = asignar(4, '614141999996');

	formato(200, 200, 255, 255, 255);
	setAsSticker(12);

	$Black = color(0, 0, 0);

	$arialbd = fuente('arialbd.ttf');
	$arial = fuente('arial.ttf');

	texto($STYLE, 10, 25, 0, 0, $arialbd, $Black, 10, 0, 0);

	texto($DESCRIPTION, 10, 50, 0, 0, $arialbd, $Black, 10, 0, 0);

	texto($SIZE, 10, 75, 0, 0, $arialbd, $Black, 10, 0, 0);

	barcode($UPC, 10, 65, 1.5, 120, 'UPC');
	barcodeTexto(1, 0, -5, 8, 'arial.ttf');

	require_once('../includes/footer.php');

} ?>