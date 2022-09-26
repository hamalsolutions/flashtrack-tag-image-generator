<?php //                    1         2          3      4
$correctos = array('QTY','STYLE','DESCRIPTION','UPC','SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'PW29P-10K');
	$DESCRIPT = asignar(2, 'MEDIUM WASH');
	$UPC = asignar(3, '196202142348');
	$SIZE = asignar(4, '0');

	// Creacion del formato
	formato(325, 100, 255, 255, 255);
	agujero(25, 50);
	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 70);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 270, 80, 0, 0, $logo, $black, 22, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC
	// lest make sure the Check Digit is correct, Else display an error message
	if ($UserUPC_CD == $CHKDIG) {
		texto(formatizarUPC_Texto('123456789012', $UPC), 50, 85, 0, 20, $arial, $black, 9, 0, 0);
	} else {
		texto('Bad Chk Digit: #'.$UserUPC_CD.' *** Should Be: #'.$CHKDIG, 10, 96, 0, 0, $arialBold, $red, 12, 0, 0);
		texto($UPC, 50, 80, 0, 0, $arial, $red, 9, 0, 0);
	}

	texto($SIZE, 50, 24, 0, 0, $arial, $black, 9, 0, 0);
	texto($STYLE, 50, 44, 0, 0, $arial, $black, 9, 0, 0);
	texto($DESCRIPT, 50, 64, 0, 0, $arial, $black, 9, 0, 0);
	require_once('../includes/footer.php');
}
?>
