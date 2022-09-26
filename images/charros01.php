<?php //                    1          2        3
$correctos = array('QTY', 'DESIGN', 'COLOR', 'SIZE');
require_once('../includes/html2.php');
if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DESIGN = asignar(1, 'Charros Lock Up Hoodie');
	$COLOR = asignar(2, 'Forest Camo');
	$SIZE = asignar(3, 'S');

	// Creacion del formato
	formato(150, 100, 255, 255, 255);
	setAsSticker(12);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');

	// Introducimos los datos
	texto('Design :', 8, 25, 0, 0, $arialNB, $black, 7.5,0,0);
	texto('Color :', 8, 60, 0, 0, $arialNB, $black, 7.5,0,0);
	texto('Size      :', 8, 90, 0, 0, $arialNB, $black, 7.5,0,0);

	if (strlen($DESIGN)<=17) {
		texto($DESIGN, 47, 25, 0, 0, $arialBold, $black, 8, 0, 0);
	} else {
		parrafo($DESIGN, 47, 25, 0, 0, $arialBold, $black, 8, 0, 17, 12);
	}

	if (strlen($COLOR)<=17) {
		texto($COLOR, 49, 60, 1, 0, $arialBold, $black, 8, 0, 0);
	} else {
		parrafo($COLOR, 49, 60, 0, 0, $arialBold, $black, 8, 0, 17, 12);
	}

	texto($SIZE, 49, 90, 0, 0, $arialBold, $black, 9,0,0);

	require_once('../includes/footer.php');
}
?>
