<?php //                     1        2       3       4       5        6          7
$correctos = array('QTY', 'DESC1', 'DESC2', 'UPC', 'PRICE', 'SKU', 'SUBCLASS', 'SIZE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESC1 = asignar(1, 'MIDI SOLID WRAP DRESS');
	$DESC2 = asignar(2, 'Description 2');
	$UPC = asignar(3, '190172901639');
	$PRICE = asignar(4, '50.00');
	$SKU = asignar(5, '66848314');
	$SUBCLASS = asignar(6, '560');
	$SIZE = asignar(7, 'L');

	// Creacion del formato
	formato(300, 125, 255, 255, 255, 90);
	agujero(25, 63);
	// Si requiere rotar la imagen ( TODA LA IMAGEN )
	$anguloDeRotacion = 90;

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	if (strlen($DESC1) <= 20) {
		texto($DESC1, 0, 58, 1, 0, $arialNBold, $black, 8, 90, 0);
	} else {
		$DESC1_final = '';
		$DESC1_words = explode(' ', $DESC1);
		foreach ($DESC1_words as $DESC1_word) {
			if (strlen($DESC1_final) + 1 + strlen($DESC1_word) <= 20) {
				$DESC1_final .= ' ' . $DESC1_word;
			} else {
				$DESC2 = $DESC1_word . ' ' . $DESC2;
			}
		}
		texto($DESC1_final, 0, 58, 1, 0, $arialNBold, $black, 8, 90, 0);
	}

	texto($DESC2, 0, 78, 1, 0, $arialNBold, $black, 8, 90, 0);

	texto($SUBCLASS, 0, 123, 2, 15, $arial, $black, 6, 90, 0);

	texto('SC', 98, 135, 0, 0, $arial, $black, 6, 90, 0);

	texto('SKU', 92, 237, 0, 0, $arial, $black, 6, 90, 0);

	texto($SKU, 15, 237, 0, 0, $arialBold, $black, 9, 90, 0);

	texto('SIZE ' . $SIZE, 0, 261, 1, 0, $arialBold, $black, 9, 90, 0);

	texto($PRICE, 0, 290, 1, 0, $arial, $black, 14, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 65, 95, 1, 40, 'UPC', 90);

	barcodeTexto(2, -1, -2, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
