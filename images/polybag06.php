<?php //                    1      2      3        4         5
$correctos = array('QTY', 'STYLE','COLOR','SIZE','UPC','DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'HM705');
	$COLOR = asignar(2, 'CAMO');
	$SIZE = asignar(3, 'S');
	$UPC = asignar(4, '614141999996');
	$DESCRIPTION = asignar(5, 'SHIRT JACKET');

	// Creacion del formato
	formato(300, 200, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	//$arial = fuente('arial.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos
	if (strlen($DESCRIPTION) >20 ){
		texto($DESCRIPTION, 0, 40, 3, -110, $arialNB, $black, 9.5, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 40, 3, -120, $arialBold, $black, 9, 0, 0);
	}


	if (strlen($STYLE) > 16) {
		texto($STYLE, 12, 65, 0, 0, $arialNB, $black, 9, 0, 0);
	} else {
		texto($STYLE, 12, 65, 0, 0, $arialBold, $black, 9, 0, 0);
	}


	if (strlen($COLOR) > 16) {
		texto($COLOR, 15, 90, 0, 0, $arialNB, $black, 9, 0, 0);
	} else {
		texto($COLOR, 12, 90, 0, 0, $arialBold, $black, 9, 0, 0);
	}

	texto($SIZE, 70, 120, 0, 0, $arialBold, $black, 9, 0, 0);

	barcode($UPC, 120, 46, 1.20, 120, 'UPC');
	barcodeTexto(1, 0, 0, 4, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
