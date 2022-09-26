<?php //                   1      2        3      4        5            6         7
$correctos = array('QTY','VSN','COLOR','SEASON','DEPT','FINELINE','DESCRIPTION','UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$VSN = asignar(1, 'ZQ92YTMTV');
	$COLOR = asignar(2, 'GRAPHITE HEATHER');
	$SEASON = asignar(3, '0320');
	$DEPT = asignar(4, '023');
	$FINELINE = asignar(5, '00 F/L 559');
	$DESCRIPTION = asignar(6, 'MTV LOGO REPEAT QT PANTS-S');
	//$DESCRIPTION = asignar(6, 'PLAYSTATION LOGO QT PANT-2XL');
	$UPC = asignar(7, '013244474285');

	// Creacion del formato
	formato(213, 131, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$red = color(235, 0, 40);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	// EPC Logo
	texto('E', 12, 112, 0, 0, $logo, $black, 20, 0, 0);

	if (strlen ($DESCRIPTION)>26) {
		texto ($DESCRIPTION, 0, 20, 3, -56, $arialNB, $black, 7, 0, 0);
	} else {
		texto($DESCRIPTION,0,20,3,-58,$arialBold,$black,6.5,0,0);
	}

	$DSF = $DEPT.' '.$FINELINE;
	texto($DSF, 68, 40, 0, 0, $arialNB, $black, 6.5, 0, 0);
	texto($COLOR, 0, 40, 2, 8, $arialNB, $black, 6.5, 0, 0);
	texto($SEASON, 68, 53, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($VSN, 0, 53, 2, 8, $arial, $black, 6.5, 0, 0);

	// Creacion del Barcode
	barcode($UPC, 79, 68, 1, 40, 'UPC');
	barcodeTexto(2, 0, -3, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
