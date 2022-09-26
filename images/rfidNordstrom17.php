<?php //                     1        2        3     4       5     6        7
$correctos = array('QTY', 'STYLE', 'COLOR', 'UPC', 'SIZE','DEPT','MSRP', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'M21240');
	$COLOR = asignar(2, 'LARGO');
	$UPC = asignar(3, '826443115923');
	$SIZE = asignar(4, '30');
	$DEPT = asignar(5, '885');
	$MSRP = asignar(6, '$228.00');
	$PRICE = asignar(7, '$149.99');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$arialNarrowBold = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$brand_logo = fuente('n.ttf');

	// Introducimos los datos
	agujero(75, 25);
    // Ticket was requested with FLORET STUDIO Logo instead of NORDSTROM
	texto('E', 116, 28, 0, 0, $logo, $black, 20, 0, 0);
	texto('1', 0, 80, 1, 0, $brand_logo, $black, 14, 0, 0);

	If (strlen($STYLE) < 18) {
		texto($STYLE, 0, 106, 1, 0, $arialBold, $black, 9, 0, 0);
	} else {
		texto($STYLE, 0, 106, 1, 0, $arialNarrowBold, $black, 9, 0, 0);
	}

	If (strlen($COLOR) < 18) {
		texto($COLOR, 0, 128, 2, 12, $arialBold, $black, 9, 0, 0);
	} else {
		texto($COLOR, 0, 128, 2, 12, $arialNarrowBold, $black, 9, 0, 0);
	}

	texto('Size: '.$SIZE, 16, 224, 0, 0, $arialBold, $black, 9, 0, 0);
	texto('Dept: '.$DEPT, 16, 248, 0, 0, $arialBold, $black, 9, 0, 0);

	//texto($PCS, 0, 270, 1, 0, $arial, $black, 10, 0, 0);
	$MSRPnoDollar = str_replace('$','',$MSRP);
	texto($MSRPnoDollar, 0, 290, 2, 17, $arialNarrowBold, $black, 14, 0, 1);

	perforacion(150,325,296);

	$PRICEnoDollar = str_replace('$','',$PRICE);
	texto($PRICEnoDollar, 0, 316, 2, 17, $arialNarrowBold, $black, 14, 0, 1);
	texto('Anniversary', 12, 316, 0, 0, $arialBold, $black, 8, 0, 0);
	// Creacion del Barcode
	barcode($UPC, 18, 145, 1, 40, 'UPC');
	barcodeTexto(2, 0,  2, 6, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
