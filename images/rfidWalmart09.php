<?php //                    1       2    3      4      5       6        7         8
$correctos = array('QTY','VSN','COLOR','SIZE','UPC','SEASON','DEPT','FINELINE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $VSN = asignar(1, 'GT98N2ZPMT');
    $COLOR = asignar(2, 'WHI8TE');
    $SIZE = asignar(3, 'ONE SIZE');
    $UPC = asignar(4, '639858584839');
    $SEASON = asignar(5, '0120');
    $DEPT = asignar(6, '023');
	$FINELINE = asignar(7, '00 F/L 3706');
    //$PRICE = asignar(8, '');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);
	$LogoBlue = color(0, 85, 184);
	//$pink = color(229, 109, 177);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	//$logo = fuente('Walmart_2010_Logo.ttf');
    //$logo = fuente('w.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');
	agujero(75, 25);

	cajaVacia(10, 70, 130, 39, $black);
	texto('SIZE', 16, 82, 0, 0, $arial, $black, 6, 0, 0);

	// Introducimos los datos
	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
	if (count($sizeArray)> 1) {
	    texto($sizeArray[0],0,87,1,0,$arialBold,$black,10.5,0,0);
	    texto('('.$sizeArray[1],0,101,1,0,$arialBold,$black,10.5,0,0);
	} else {
	    texto($SIZE,0,98,1,0,$arialBold,$black,12,0,0);
	}

    //texto($FINELINE,texto($SUB,texto($DEPT,10,135,0,65,$arialNBold,$black,7,0,0)-6,122,0,45,$arial,$black,8,0,0)-6,122,0,15,$arial,$black,8,0,0);
    texto($FINELINE,10,135,0,0,$arialNBold,$black,7,0,0);
	//$DSF = $DEPT . $SUB . $FINELINE;
	//texto($DSF, 10, 137, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($COLOR, 0, 137, 2, 8, $arial, $black, 6.5, 0, 0);
    texto($SEASON, 10, 151, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($VSN, 0, 151, 2, 7, $arial, $black, 6.5, 0, 0);
    texto($DEPT, 0, 164, 2, 7, $arial, $black, 6.5, 0, 0);
    //texto($SUPP, 0, 164, 2, 8, $arial, $black, 6.5, 0, 0);

    texto('E', 0, 28, 2, 10, $epc_logo, $black, 18, 0, 0);
    perforacion(150, 325, 287);
	//texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 158, 1.1, 72, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>