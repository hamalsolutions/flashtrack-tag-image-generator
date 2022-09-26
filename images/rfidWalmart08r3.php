<?php //                    1       2          3         4      5      6        7       8       9        10
$correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE','UPC','SEASON','DSF','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $STYLE = asignar(1, 'MBNIR109152H');
    $COLOR = asignar(2, 'BLACK');
    $DESCRIPTION = asignar(3, 'Nirvana');
    $SIZE = asignar(4, 'S (34/36)');
    $UPC = asignar(5, '716068663278');
    $SEASON = asignar(6, '0');
    $DSF = asignar(7, '23/00/3706');
    $PRICE = asignar(8, '7.88');

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
	texto($DSF, 10, 131, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($COLOR, 0, 131, 2, 8, $arial, $black, 6.5, 0, 0);
    texto($SEASON, 10, 145, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($STYLE, 0, 145, 2, 8, $arial, $black, 6.5, 0, 0);
    texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);
	texto('Distributed by Walmart Inc.', 0, 256, 1, 0, $arial, $black, 6.5, 0, 0);
    texto('4', 0, 270, 1, 0, $logo, $black, 13, 0, 0);
    texto('E', 10, 275, 0, 0, $epc_logo, $black, 18, 0, 0);
    perforacion(150, 325, 287);

	// Creacion del Barcode
	barcode($UPC, 11, 152, 1.1, 52, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>