<?php //                    1       2          3         4      5      6       7      8       9        10
$correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE','UPC','SEASON','DEPT','SUB','FINELINE','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $STYLE = asignar(1, 'PBLJAN-16');
    $COLOR = asignar(2, 'YELLOW');
    $DESCRIPTION = asignar(3, 'TUNIC TANK');
    $SIZE = asignar(4, 'S/CH (3-5)');
    //$SIZE = asignar(4,'SMALL');
	//$SIZE = asignar(4,'L/G (11-13)');
	//$SIZE = asignar(4,'XL/XG (15-17)');
    $UPC = asignar(5, '639858584839');
    $SEASON = asignar(6, '01-10');
    $DEPT = asignar(7, '23');
	$SUB = asignar(8, '00');
	$FINELINE = asignar(9, '3639');
    $PRICE = asignar(10, '9.88');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);
	$LogoBlue = color(0, 85, 184);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
    $logo = fuente('w.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');
	agujero(75, 25);

	cajaVacia(10, 64, 130, 34, $black);
	texto('SIZE', 16, 76, 0, 0, $arial, $black, 6, 0, 0);

	// Introducimos los datos
	texto('0', 0, 60, 1, 0, $logo, $black, 30, 0, 0);

	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
	if (count($sizeArray)> 1) {
	    texto($sizeArray[0],0,78,1,0,$arialBold,$black,10.5,0,0);
	    texto('('.$sizeArray[1],0,92,1,0,$arialBold,$black,10.5,0,0);
	} else {
	    texto($SIZE,0,90,1,0,$arialBold,$black,12,0,0);
	}

    texto($DESCRIPTION, 0, 116, 1, 0, $arialNBold, $black, 7, 0, 0);
    //texto($FINELINE,texto($SUB,texto($DEPT,10,135,0,65,$arialNBold,$black,7,0,0)-6,122,0,45,$arial,$black,8,0,0)-6,122,0,15,$arial,$black,8,0,0);
	$DSF = $DEPT . $SUB . $FINELINE;
	texto($DSF, 10, 131, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($COLOR, 0, 131, 2, 8, $arial, $black, 6.5, 0, 0);
    texto($SEASON, 10, 145, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($STYLE, 0, 145, 2, 8, $arial, $black, 6.5, 0, 0);

	texto('Distributed by Walmart Inc.', 0, 256, 1, 0, $arial, $black, 6.5, 0, 0);
    texto('4', 0, 270, 1, 0, $logo, $black, 13, 0, 0);
    texto('E', 10, 275, 0, 0, $epc_logo, $black, 18, 0, 0);
    perforacion(150, 325, 287);

	texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 152, 1.1, 52, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>