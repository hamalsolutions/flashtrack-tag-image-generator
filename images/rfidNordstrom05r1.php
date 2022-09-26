<?php //                     1        2         3              4             5          6      7       8
$correctos = array('QTY', 'STYLE', 'COLOR', 'COLOR_NRF', 'COLOR_CODE', 'DESCRIPTION', 'UPC', 'SIZE', 'MSRP');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'GP0255N');
	$COLOR = asignar(2, 'PESTO01');
	$COLOR_NRF = asignar(3, '302');
	$COLOR_CODE = asignar(4, 'PO01');
	$DESCRIPTION = asignar(5, 'SEAMLESS CORE POWER LEGGING');
	$UPC = asignar(6, '019593117996');
	$SIZE = asignar(7, '00/0XL');
	$MSRP = asignar(8, '79.00');
	//$MSRP = asignar(8, '');
	//
	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$helvnue = fuente('HelveticaNeue.ttf');
	$helvnue70 = fuente('HelveticaNeue_70.ttf');
	$epcLogo = fuente('EPC_Logo.ttf');
	$logo = fuente('GoodAmerican_Logos.ttf');

	// Introducimos los datos
	agujero(75, 25);
	texto('E', 110, 30, 0, 0, $epcLogo, $black, 22, 0, 0);
	texto('G', 0, 70, 1, 0, $logo, $black, 19, 0, 0);

	If (strlen($STYLE) < 10) {
		texto($STYLE, 12, 106, 0, 0, $helvnue, $black, 8, 0, 0);
	} else {
		texto($STYLE, 12, 106, 0, 0, $helvnue70, $black, 8, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 12, 106, 2, 12, $helvnue, $black, 8, 0, 0);
	} else {
		texto($COLOR, 12, 106, 2, 12, $helvnue70, $black, 8, 0, 0);
	}

	texto($COLOR_NRF.'      '.$COLOR_CODE, 0, 122, 1, 0, $helvnue, $black, 8, 0, 0);

	If (strlen($DESCRIPTION) < 17) {
		texto($DESCRIPTION, 0, 130, 1, 0, $helvnue, $black, 8, 0, 0);
	} else {
		texto($DESCRIPTION, 0, 138, 1, 0, $helvnue70, $black, 8, 0, 0);
	}

	texto($SIZE, 0, 252, 1, 0, $helvnue, $black, 14, 0, 0);
	//perforacion(150,325,300);    // RFID STOCK doesnt have perf
	if ($MSRP <> '') {
		texto('MSRP', 16, 316, 0, 0, $helvnue, $black, 10, 0, 0);
	}

	texto($MSRP, 0, 316, 2, 18, $helvnue, $black, 11.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 18, 154, 1, 58, 'UPC');

	barcodeTexto(2, 0,  2, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
