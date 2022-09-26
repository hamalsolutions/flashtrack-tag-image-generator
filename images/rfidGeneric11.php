<?php //   1       2          3         4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'DESCRIPTION', 'UPC', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'TK1803307MLTNS');
	$COLOR = asignar(2, 'MLT');
	$DESCRIPTION = asignar(3, 'CAMO KAWAII CINCHCROSSBODY');
	$UPC = asignar(4, '811556031291');
	$PRICE = asignar(5, '72.00');

	// Creacion del formato
	formato(196, 72, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialB = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 144, 20, 0, 0, $logo, $black, 16, 0, 0);

	texto($STYLE, 10, 15, 0, 0, $arial, $black, 6, 0, 0);
	texto($COLOR, 10, 25, 0, 0, $arial, $black, 6, 0, 0);

	if (strlen($DESCRIPTION) > 30) {
		texto($DESCRIPTION, 10, 35, 0, 0, $arialNB, $black, 6.5, 0, 0);
	} else {
		texto($DESCRIPTION, 10, 35, 0, 0, $arial, $black, 6, 0, 0);
	}

	texto($PRICE, 0, 185, 1, 0, $arialB, $black, 8, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 10, 32, 1.2, 27, 'UPC');

	barcodeTexto(1, 0, -3, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
