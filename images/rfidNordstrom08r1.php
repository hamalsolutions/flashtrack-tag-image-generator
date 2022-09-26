<?php //                     1        2       3     4      5      6        7        8       9
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC','DEPT','SIZE','MSRP', 'PRICE','SAVINGS','PCS');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '67454');
	$COLOR = asignar(2, 'SAGE');
	$UPC = asignar(3, '690681881335');
	$DEPT = asignar(4,'859');
	$SIZE = asignar(5, '2XS');
	$MSRP = asignar(6, '$169.00');
	$PRICE = asignar(7, '$49.97');
	$SAVINGS = asignar(8, '50% Savings');
	$PCS = asignar(9, '2 PC');
	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialB = fuente('arialbd.ttf');
	$arialSlashB = fuente('Arial_Slash_bld.ttf');
	$arialNB = fuente('arialnb.ttf');
	$arialN70 = fuente('ArialN70.ttf');
	$arialN80 = fuente('ArialN80.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$Nords_logo = fuente('n.ttf');
	//$astr_logo = fuente('a.ttf');
	//$nordLogo = fuente('n.ttf');


	// Introducimos los datos
	agujero(75, 25);
    // Ticket was approved without NORDSTROM Logo 2/18/2021 by Greg Ward
	texto('E', 110, 30, 0, 0, $logo, $black, 23, 0, 0);
	texto('3', 0, 80, 1, 0, $Nords_logo, $black, 11, 0, 0);

	If (strlen($STYLE) < 18) {
		texto($STYLE, 16, 106, 0, 0, $arialB, $black, 9, 0, 0);
	} else {
		texto($STYLE, 16, 106, 0, 0, $arialNB, $black, 9, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 16, 124, 0, 0, $arialB, $black, 9, 0, 0);
	} else {
		texto($COLOR, 16, 124, 0, 0, $arialNB, $black, 9, 0, 0);
	}

	texto('DEPT: '.$DEPT, 16, 218, 0, 0, $arialB, $black, 11, 0, 0);
	texto($PCS, 0, 242, 1, 0, $arialB, $black, 10, 0, 0);
	texto($SIZE, 16, 264, 0, 0, $arialB, $black, 11, 0, 0);
	//perforacion(150,325,300);
	texto('COMPARABLE VALUE', 12, 298, 0, 0, $arialN70, $black, 9, 0, 0);
	texto($MSRP, 0, 298, 2, 9, $arialSlashB, $black, 10.5, 0, 0);

	// the line below replaces one item from the string
	//$SAVINGS = str_replace('SAVINGS', '', strtoupper($SAVINGS));

	//The line below replaces 2 items from the string using an array [1,2] creates an array with two items to search
	//then i replaced item 1 (space) with null and item 2 (SAVINGS) replaced with null also
	$SAVINGS = str_replace([' ','SAVINGS'], ['',''], strtoupper($SAVINGS));
	texto($SAVINGS.' Savings', 12, 316, 0, 0, $arialNB, $black, 9, 0, 0);
	texto($PRICE, 0, 316, 2, 9, $arialB, $black, 10, 0, 0);


	// Creacion del Barcode
	barcode($UPC, 18, 140, 1, 30, 'UPC');

	barcodeTexto(2, 0,  2, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
