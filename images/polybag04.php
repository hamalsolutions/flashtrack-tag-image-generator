<?php //                    1      2      3        4         5
$correctos = array('QTY', 'SUB', 'LOT', 'SIZE', 'COLOR', 'SUPPLIER');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$SUB = asignar(1, '529');
	$LOT = asignar(2, '5008');
	$SIZE = asignar(3, 'MEDIUM');
	$COLOR = asignar(4, 'NVY');
	$SUPPLIER = asignar(5, '13655-6');

	// Creacion del formato
	formato(200, 150, 255, 255, 255);

	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto($SUB, 0, 35, 1, 0, $arialBold, $black, 24, 0, 0);
	texto($LOT, 0, 70, 1, 0, $arialBold, $black, 24, 0, 0);

	//imageline($img,0,75,200,75,$black);
	//imageline($img,0,76,200,76,$black);

	texto('Size: ', 8, 100, 0, 0, $arialBold, $black, 8, 0, 0);
	texto('Color: ', 90, 100, 0, 0, $arialBold, $black, 8, 0, 0);

	if (strlen($SIZE) < 8) {
		texto($SIZE, 36, 100, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($SIZE, 36, 100, 0, 0, $arialNB, $black, 8, 0, 0);
	}

	if (strlen($COLOR) < 8) {
		texto($COLOR, 124, 100, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		texto($COLOR, 124, 100, 0, 0, $arialNB, $black, 8, 0, 0);
	}

	texto('Supplier #: ' . $SUPPLIER, 8, 135, 0, 0, $arialBold, $black, 8, 0, 0);

	require_once('../includes/footer.php');
}
?>
