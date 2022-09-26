<?php //                     1         2         3         4          5         6          7
$correctos = array('QTY', 'STYLE', 'NRF_CODE', 'UPC', 'COLOR_CODE', 'COLOR', 'SIZE', 'RETAIL');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'GP0843');
	$NRF_CODE = asignar(2, '001');
	$UPC = asignar(3, '000123456074');
	$COLOR_CODE = asignar(4, 'K001');
	$COLOR = asignar(5, 'BLACK001');
	$SIZE = asignar(6, '0');
	$RETAIL = asignar(7, '49.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);
	agujero(75, 25);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70B = fuente('Arial_70_Bold.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$epcLogo = fuente('EPC_Logo.ttf');
	$logo = fuente('GoodAmerican_Logos.ttf');

	// Introducimos los datos
	texto('E', 110, 30, 0, 0, $epcLogo, $black, 22, 0, 0);
	texto('G', 0, 74, 1, 0, $logo, $blackBold, 20.5, 0, 0);

	texto($STYLE, 12, 110, 0, 0, $arialBold, $black, 8, 0, 0);
	texto($NRF_CODE, 12, 130, 0, 0, $arialBold, $black, 8, 0, 0);

	If (strlen($COLOR_CODE) < 10) {
		texto($COLOR_CODE, 12, 234, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR_CODE, 12, 234, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 12, 250, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 12, 250, 0, 0, $arialNarrowBold, $black, 8, 0, 0);
	}

	texto($SIZE, 0, 275, 1, 0, $arialBold, $black, 10, 0, 0);
	perforacion($fWidth=150,$fHeight=325,$yPosition=287);
	perforacion($fWidth=150,$fHeight=325,$yPosition=303);
	texto($RETAIL, 0, 320, 2, 18, $arialNarrowBold, $black, 11, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 140, 1, 50, 'UPC');
	barcodeTexto(2, 0,  2, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
