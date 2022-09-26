<?php //                    1         2         3        4          5         6       7       8       9      10
$correctos = array('QTY','SIZE','DESCRIPTION','DEPT','SUBCLASS','FINELINE','COLOR','SEASON','STYLE','UPC','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $SIZE = asignar(1, '1/25');
    //$SIZE = asignar(1, 'L/G (12/14)');
    $DESCRIPTION = asignar(2, 'CP CURVY SKINNY');
    $DEPT = asignar(3, '34');
    $SUBCLASS = asignar(4, '00');
    $FINELINE = asignar(5, '3158');
    $COLOR = asignar(6, 'DKWASH');
    $SEASON = asignar(7, '03-21');
    $STYLE = asignar(8, 'CC22372H18B');
    $UPC = asignar(9, '194949195603');
    $PRICE = asignar(10, '16.50');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);
    agujero(75, 25);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
    $arial60 = fuente('Arial_60_Bold.ttf');
	$arialNBold = fuente('arialnb.ttf');
    $logo = fuente('w.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');

	//cajaVacia(10, 72, 130, 34, $black);
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
        texto ($DESCRIPTION, 0, 126, 1, 0, $arial60, $black, 6.5, 0, 0);
    } else {
        texto($DESCRIPTION,0,126,1,0,$arialNBold,$black,6.5,0,0);
    }

    $DSF = $DEPT.$SUBCLASS.$FINELINE;
    texto($DSF, 12, 138, 0, 0, $arialNBold, $black, 6, 0, 0);
    texto($COLOR, 0, 138, 2, 12, $arialNBold, $black, 6, 0, 0);
    texto($SEASON, 12, 149, 0, 0, $arialNBold, $black, 6, 0, 0);
    texto($STYLE, 0, 149, 2, 12, $arialNBold, $black, 6, 0, 0);
	texto('RN#133647', 0, 244, 1, 0, $arial, $black, 6, 0, 0);
	texto('Distributed by Walmart Inc.', 0, 254, 1, 0, $arial, $black, 5.5, 0, 0);
    texto('5', 0, 279, 2, 14, $logo, $black, 19, 0, 0);
    texto('E', 14, 275, 0, 0, $epc_logo, $black, 16, 0, 0);
	texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 152, 1.1, 58, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>