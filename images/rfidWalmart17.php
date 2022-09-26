<?php //                    1     2          3             4          5      6
$correctos = array('QTY','SIZE','DEPT','DESCRIPTION','DESCRIPTION2','UPC','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $SIZE = asignar(1, 'L/G');
    //$SIZE = asignar(1, 'L/G (12/14)');
    $DEPT = asignar(2, '41');
    $DESCRIPTION = asignar(3, 'SOUTHERN DIXIE TR BLACK');
    $DESCRIPTION2 = asignar(4, 'MED WMN FRNT-BCK LS');
    $UPC = asignar(5, '888568848421');
    $PRICE = asignar(6, '14.96');


	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);
	$LogoBlue = color(0, 85, 184);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
    $arial60 = fuente('Arial_60_Bold.ttf');
	$arialNBold = fuente('arialnb.ttf');
    $logo = fuente('w.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');
	agujero(75, 25);

	cajaVacia(10, 72, 130, 34, $black);
	texto('SIZE', 16, 86, 0, 0, $arial, $black, 6, 0, 0);

	// Introducimos los datos
	texto('0', 0, 66, 1, 0, $logo, $black, 30, 0, 0);

	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
	if (count($sizeArray)> 1) {
	    texto($sizeArray[0],0,86,1,0,$arialBold,$black,10.5,0,0);
	    texto('('.$sizeArray[1],0,100,1,0,$arialBold,$black,10.5,0,0);
	} else {
	    texto($SIZE,0,96,1,0,$arialBold,$black,12,0,0);
	}

    if (strlen ($DESCRIPTION)>24) {
        texto ($DESCRIPTION, 0, 124, 1, 0, $arial60, $black, 6, 0, 0);
    } else {
        texto($DESCRIPTION,0,124,1,0,$arialNBold,$black,6,0,0);
    }

    if (strlen ($DESCRIPTION2)>24) {
        texto ($DESCRIPTION2, 0, 138, 1, 0, $arial60, $black, 6, 0, 0);
    } else {
        texto($DESCRIPTION2,0,138,1,0,$arialNBold,$black,6,0,0);
    }

    texto('DEPT '.$DEPT, 12, 156, 0, 0, $arialNBold, $black, 6, 0, 0);
	texto('Distributed by Walmart Inc.', 0, 254, 1, 0, $arial, $black, 6.5, 0, 0);
    texto('4', 0, 270, 1, 0, $logo, $black, 13, 0, 0);
    texto('E', 10, 275, 0, 0, $epc_logo, $black, 18, 0, 0);
    //perforacion(150, 325, 287);

	texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 152, 1.1, 52, 'UPC');

	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>