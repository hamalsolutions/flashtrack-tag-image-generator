<?php //             0       1        2       3       4     5        6      7       8
$correctos = array('QTY', 'STYLE', 'COLOR','SEASON','SKU','DEPT', 'SIZE', 'UPC', 'PRICE');

require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, 'Kalese');
	$COLOR = asignar(2, 'Black/Noir');
	$SEASON = asignar(3, 'S16');
	$SKU = asignar(4, '12345678');
	$DEPT = asignar(5, '123');
	$SIZE = asignar(6, 'S');
	$UPC = asignar(7, '614141999996');
	$PRICE = asignar(8, '80.00');

	// Creacion del formato
	formato(175, 75, 255, 255, 255);
	setAsSticker(10);
	// Colores a usar
	$black = color(0, 0, 0);
	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialN = fuente('arialn.ttf');
	$logo = fuente('EPC_Logo.ttf');
	// Introducimos los datos
	texto('E', 0, 18, 2, 5, $logo, $black, 14, 0, 0);
	texto('STYLE/MODÈLE:', 6, 10, 0, 0, $arialN, $black, 7, 0, 0);
	texto('COLOR/COULEUR:', 6, 21, 0, 0, $arialN, $black, 7, 0, 0);
	texto($STYLE, 75, 10, 0, 0, $arial, $black, 7, 0, 0);
	texto($COLOR, 75, 20, 0, 0, $arial, $black, 7, 0, 0);
	texto($SEASON, 6, 32, 0, 0, $arial, $black, 7, 0, 0);
	texto('DEPT: '.$DEPT, 6, 42, 0, 0, $arialN, $black, 7, 0, 0);
	texto('SKU: '.$SKU, 86, 32, 0, 0, $arialN, $black, 7, 0, 0);
	texto('SIZE/TAILLE: '.$SIZE, 6, 72, 0, 0, $arialN, $black, 7, 0, 0);
	texto($PRICE, 0, 72, 2, 4, $arial, $black, 8, 0, 1);
	// Creacion del Barcode
	barcode($UPC, 52, 34, 1, 20, 'UPC');
	barcodeTexto(.1, 0, -5, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>
