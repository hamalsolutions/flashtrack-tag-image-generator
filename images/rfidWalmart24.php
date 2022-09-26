<?php /** @noinspection PhpRedundantClosingTagInspection */
//                          1         2             3                4              5        6       7          8           9     10      11
$correctos = array('QTY','SIZE','SPANISH_SIZE','DESCRIPTION','DEPT_SUB_FINELINE','SEASON','COLOR','STYLE','SUPPLIER_CODE','UPC','DOLLAR','CENT');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $SIZE = asignar(1, 'XXL');
    $SPANISHSIZE = asignar(2, 'EXTRA EXTRA LARGE');
    $DESCRIPTION = asignar(3, 'Military Green Don`t Tred Gadsen LS');
    $DSF = asignar(4, '41006273');
    $SEASON = asignar(5, '03-21');
    $COLOR = asignar(6, 'Military Green');
    $STYLE = asignar(7, 'MGDTGLSS');
    $SUPPLIER = asignar(8, '89414');
    $UPC = asignar(9, '850034059013');
    $DOLLAR = asignar(10, '$20');
    $CENT = asignar(11, '98');

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
    texto('SIZE', 16, 84, 0, 0, $arial, $black, 6.5, 0, 0);
    texto($SIZE, 0, 86, 1, 0, $arialBold, $black, 10, 0, 0);
    texto($SPANISHSIZE, 0, 104, 1, 0, $arialNBold, $black, 9, 0, 0);
	// Introducimos los datos
    //Walmart Logo
	texto('0', 0, 66, 1, 0, $logo, $black, 30, 0, 0);

//	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
//	if (count($sizeArray)> 1) {
//	    texto($sizeArray[0],0,86,1,0,$arialBold,$black,10.5,0,0);
//	    texto('('.$sizeArray[1],0,100,1,0,$arialBold,$black,10.5,0,0);
//	} else {
//	    texto($SIZE,0,96,1,0,$arialBold,$black,12,0,0);
//	}

    if (strlen ($DESCRIPTION)>24) {
        texto ($DESCRIPTION, 0, 123, 1, 0, $arial60, $black, 8.5, 0, 0);
    } else {
        texto($DESCRIPTION,0,123,1,0,$arialNBold,$black,6.5,0,0);
    }

    texto($DSF, 12, 138, 0, 0, $arialNBold, $black, 7, 0, 0);
    texto($COLOR, 0, 138, 2, 12, $arialNBold, $black, 7, 0, 0);
    texto($SEASON, 12, 152, 0, 0, $arialNBold, $black, 7, 0, 0);
    texto($STYLE, 0, 152, 2, 12, $arialNBold, $black, 7, 0, 0);
//	texto('RN#133647', 0, 244, 1, 0, $arial, $black, 6, 0, 0);
//	texto('Distributed by Walmart Inc.', 0, 254, 1, 0, $arial, $black, 5.5, 0, 0);
    texto('5', 0, 279, 2, 14, $logo, $black, 19, 0, 0);
    texto('E', 14, 275, 0, 0, $epc_logo, $black, 16, 0, 0);
	$PRICE = $DOLLAR.'.'.$CENT;
    texto($PRICE, 0, 312, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 154, 1.1, 58, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>