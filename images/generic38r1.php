<?php
$correctos = array('QTY', 'STYLE', 'DESCRIPTION', 'SIZE', 'UPC', 'COLOR NAME');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {

	$STYLE = asignar(1, '18-4004421-SW001139');
	$DESCRIPTION = asignar(2, 'NILANIA');
	$SIZE = asignar(3, 'XXS');
	$UPC = asignar(4, '614141999996');
	$CLRNAME = asignar(5, 'SUGAR W-MISHAP HEM');

	formato(200, 200, 255, 255, 255);
	setAsSticker(12);

	$Black = color(0, 0, 0);

	$arialbd = fuente('arialbd.ttf');
	$arial = fuente('arial.ttf');
	$arialNB = fuente('arialnb.ttf');

	texto($STYLE, 10, 25, 0, 0, $arialbd, $Black, 10, 0, 0);

	texto($DESCRIPTION, 10, 45, 0, 0, $arialbd, $Black, 10, 0, 0);
	if (strlen($CLRNAME) < 22) {
		texto($CLRNAME, 10, 65, 0, 0, $arialbd, $Black, 10, 0, 0);
	} else {
		texto($CLRNAME, 10, 65, 0, 0, $arialNB, $Black, 10, 0, 0);
	}

	texto($SIZE, 10, 85, 0, 0, $arialbd, $Black, 10, 0, 0);

	barcode($UPC, 10, 68, 1.5, 110, 'UPC');
	barcodeTexto(1, 0, -5, 8, 'arial.ttf');

	require_once('../includes/footer.php');

} ?>