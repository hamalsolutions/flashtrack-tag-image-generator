<?php //    1       2            3       4     5      6        7
$correctos = array('QTY', 'STYLE', 'GROUP NAME', 'COLOR', 'SIZE', 'UPC', 'PRICE', 'COLORBAR');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato

	$STYLE = asignar(1, 'JFKIH005352');
	$GROUP = asignar(2, 'FANTASY B');
	$COLOR = asignar(3, 'GOLD/MULTI');
	$SIZE = asignar(4, 'XS');
	$UPC = asignar(5, '192087041561');
	$PRICE = asignar(6, '40.00');
	$COLORBAR = asignar(7, 'PINK');
	// Creacion del formato
	formato(150, 325, 255, 255, 255);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);
	$blue = color(114, 205, 244);
	$green = color(187, 228, 183);
	$pink = color(227, 126, 179);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arial70B = fuente('Arial_70_Bold.ttf');
	$arialBold = fuente('arialbd.ttf');

	// Introducimos los datos

	texto('STYLE  ' . $STYLE, 0, 50, 1, 0, $arialBold, $black, 8, 0, 0);

	$XCOLOR = 'COLOR  ' . $COLOR;
	if (strlen($XCOLOR < 18)) {
		texto($XCOLOR, 0, 202, 1, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($XCOLOR, 0, 202, 1, 0, $arial70B, $black, 8, 0, 0);
	}

	if ($COLORBAR == 'BLUE') {
		cajaRellena(1, 155, 147, 25, $blue, $blue);

	} elseif ($COLORBAR == 'GREEN') {
		cajaRellena(1, 155, 147, 25, $green, $green);

	} elseif ($COLORBAR == 'PINK') {
		cajaRellena(1, 155, 147, 25, $pink, $pink);
	} else {
		cajaRellena(1, 155, 147, 25, $black, $black);
	}

	texto($GROUP, 0, 172, 1, 0, $arialBold, $black, 7, 0, 0);

	texto('SIZE', 50, 227, 0, 0, $arialBold, $black, 6.5, 0, 0);

	texto($SIZE, 75, 230, 0, 0, $arialBold, $black, 10.5, 0, 0);

	texto('-- - - - - - - - - - - - - - - - --', 0, 280, 1, 0, $arial, $black, 10, 0, 0);

	//texto('MSRP',33,307,0,0,$arial,$black,7.5,0,0);
	texto($PRICE, 0, 310, 1, 0, $arial, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 68, 1.1, 62, 'UPC');

	barcodeTexto(3, 0, -1, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
