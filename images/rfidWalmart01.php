<?php //                      1        2
$correctos = array('QTY', 'DESCRIPTION','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESCRIPT = asignar(1, 'Notorious B.I.G. Art Pop');
	$UPC = asignar(2, '716068641757');

	// Creacion del formato
	formato(325, 100, 255, 255, 255);
	agujero(25, 50);
	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 270, 57, 0, 0, $logo, $black, 22, 0, 0);

	// No Barcode needed, only the Human Readable, So let's make sure it is a good check digit
	$CHKDIG = generate_upc_checkdigit($UPC); // Generate the correct Check Digit
	$UserUPC_CD = substr($UPC, -1);    // This is the check Digit provided by Customer's UPC

	// lest make sure the Check Digit is correct, Else display an error message
	if ($UserUPC_CD == $CHKDIG) {
		texto(formatizarUPC_Texto('123456789012', $UPC), 0, 44, 3, 20, $arial, $black, 12, 0, 0);
	} else {
		texto('Bad Chk Digit: #'.$UserUPC_CD.' *** Should Be: #'.$CHKDIG, 0, 20, 1, 0, $arial, $red, 12, 0, 0);
		texto($UPC, 0, 40, 1, 0, $arial, $red, 12, 0, 0);
	}
	texto($DESCRIPT, 0, 69, 3, 20, $arial, $black, 12, 0, 0);
	require_once('../includes/footer.php');
}
?>
