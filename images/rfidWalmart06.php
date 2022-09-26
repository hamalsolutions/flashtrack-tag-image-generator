<?php //                    1       2       3      4       5      6        7          8          9     10          11           12
$correctos = array('QTY','STYLE','COLOR','SIZE','SEASON','DEPT','SUB','FINELINE','DESCRIPTION','UPC','PRICE','REPLENISHMENT','SUPPLIER');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'LT30009MT');
	$COLOR = asignar(2, 'ARTIC DUST');
	$SIZE = asignar(3, 'XS');
	$SEASON = asignar(4, '03-20');
	$DEPT = asignar(5, '34');
	$SUB = asignar(6, '00');
	$FINELINE = asignar(7, '0517');
	$DESCRIPT = asignar(8, 'DESCRIPTION');
	$UPC = asignar(9, '195156314405');
	$PRICE = asignar(10, '$9.90');
	$REPLEN = asignar(11, 'REPLENISHMENT');
	$SUPPLIER = asignar(12, 'SUPPLIER');

	// Creacion del formato
	formato(281, 150, 255, 255, 255);
	agujero(25, 75);
	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$wlogo = fuente('w.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 70, 112, 0, 0, $logo, $black, 20, 0, 0);
	texto('4', 87, 136, 3, -80, $wlogo, $black, 10, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC

	$DSF = $DEPT.$SUB.$FINELINE;
	texto($DESCRIPT, 0, 26, 3, -80, $arial, $black, 6.5, 0, 0);
	texto($DSF, 116, 40, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($COLOR, 0, 40, 2, 33, $arial, $black, 6.5, 0, 0);
	texto($SEASON, 116, 53, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($STYLE, 0, 53, 2, 33, $arial, $black, 6.5, 0, 0);
	texto($REPLEN, 116, 66, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($SUPPLIER, 0, 66, 2, 33, $arial, $black, 6.5, 0, 0);
	texto($SIZE, 87, 116, 3, -80, $arial, $black, 6.5, 0, 0);
	texto($PRICE, 87, 126, 3, -80, $arial, $black, 6.5, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 126, 70, 1, 28, 'UPC');

	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
