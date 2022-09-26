<?php //                       1         2
$correctos = array('QTY','DESCRIPTION','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPT = asignar(1, 'SOF SIL NO TIE WHT');
	//$DESCRIPT = asignar(1, 'HS 54IN BOOT LACE BL testing more');
	$UPC = asignar(2, '096506403131');

	// Creacion del formato
	formato(200, 118, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70 = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	setAsSticker (12);
	// EPC Logo
	texto('E', 14, 100, 0, 0, $logo, $black, 18, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC
	// lest make sure the Check Digit is correct, Else display an error message
	if ($UserUPC_CD == $CHKDIG) {
		texto(formatizarUPC_Texto('123456789012', $UPC), 0, 52, 1, 0, $arial, $black, 10, 0, 0);
	} else {
		texto('Bad Chk Digit: # '.$UserUPC_CD.' *** Should Be: # '.$CHKDIG, 0, 30, 1, 0, $arial, $red, 8, 0, 0);
		texto($UPC, 0, 52, 1, 0, $arial, $red, 10, 0, 0);
	}


	if (strlen ($DESCRIPT)>22) {
		texto ($DESCRIPT, 0, 75, 1, 0, $arial70, $black, 10, 0, 0);
	} else {
		texto($DESCRIPT,0,75,1,0,$arial,$black,10,0,0);
	}

	require_once('../includes/footer.php');
}
?>
