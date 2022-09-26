<?php //                      1        2
$correctos = array('QTY', 'DESCRIPTION','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPT = asignar(1, 'MTV LOGO REPEAT QT PANS-2L');
	//$DESCRIPT = asignar(1, 'MTV LOGO REPEAT QT');
	$UPC = asignar(2, '013244474322');

	// Creacion del formato
	formato(213, 131, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	//$arialN = fuente('arialn.ttf');
	$arial70 = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 12, 114, 0, 0, $logo, $black, 22, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC

	// lest make sure the Check Digit is correct, Else display an error message
	if ($UserUPC_CD == $CHKDIG) {
		texto(formatizarUPC_Texto('123456789012', $UPC), 0, 54, 1, 0, $arialBold, $black, 12, 0, 0);
	} else {
		texto('Bad Chk Digit: #'.$UserUPC_CD, 0, 14, 1, 0, $arialBold, $red, 11, 0, 0);
		texto(' *** Should Be: #'.$CHKDIG, 0, 32, 1, 0, $arialBold, $red, 11, 0, 0);
		texto($UPC, 0, 52, 1, 0, $arialBold, $red, 12, 0, 0);
	}

	if (strlen ($DESCRIPT)>18) {
		texto($DESCRIPT, 0, 78, 1, 0, $arial70, $black, 12, 0, 0);
	} else {
		texto($DESCRIPT, 0, 78, 1, 0, $arialBold, $black, 12, 0, 0);
	}

	require_once('../includes/footer.php');
}
?>
