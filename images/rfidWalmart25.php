<?php //                      1           2
$correctos = array('QTY', 'DESCRIPTION','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPT = asignar(1, 'MINECRAFT BOYS 5PACK BRIEFS');
	//$DESCRIPT = asignar(1, 'MINECRAFT BOYS 5PACK box');
	//$DESCRIPT = asignar(1, 'MINECRAFT BOYS 5PACK BRIEFS-XXXXX');
	$UPC = asignar(2, '452990972704');

	// Creacion del formato
	formato(213, 131, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialN = fuente('arialn.ttf');
	$arial70 = fuente('Arial_70_Bold.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 12, 114, 0, 0, $logo, $black, 22, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC

	// lest make sure the Check Digit is correct, Else display an error message
	if ($UserUPC_CD <> $CHKDIG) {
		//texto(formatizarUPC_Texto('123456789012', $UPC), 0, 54, 1, 0, $arialBold, $black, 12, 0, 0);
	//} else {
		texto('Invalid UPC CD.# '.$UPC, 0, 18, 1, 0, $arial, $red, 10, 0, 0);
		texto('Wrong Chk Digit: # '.$UserUPC_CD, 0, 87, 1, 0, $arial, $red, 11, 0, 0);
		texto('Should Be: #'.$CHKDIG, 0, 102, 1, 0, $arialBold, $red, 11, 0, 0);

	}

	if (strlen ($DESCRIPT) == 27) {
		texto($DESCRIPT, 20, 114, 3, -34, $arialN, $black, 8.5, 0, 0);
		} elseif (strlen($DESCRIPT) >= 28) {
			texto($DESCRIPT, 20, 114, 3, -34, $arial70, $black, 8.5, 0, 0);
		} else {
	 	texto($DESCRIPT, 20, 114, 3, -28, $arial, $black, 8.5, 0, 0);
	}
	// Creacion del Barcode
	barcode($UPC, 53, 22, 1.15, 56, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>
