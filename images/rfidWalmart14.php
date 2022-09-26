<?php //                    1     2          3         4      5
$correctos = array('QTY','SIZE','DEPT','DESCRIPTION','UPC','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $SIZE = asignar(1, 'L/G');
    //$SIZE = asignar(1, 'L/G (12/14)');
    $DEPT = asignar(2, '41');
    $DESCRIPTION = asignar(3, 'ALABAMA GIRL SASSY OWL HR.CRL');
    $UPC = asignar(4, '888568814235');
    $PRICE = asignar(5, '14.96');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');
	agujero(75, 25);

	cajaVacia(10, 66, 130, 38, $black);
	texto('SIZE', 16, 80, 0, 0, $arial, $black, 6, 0, 0);

	// Introducimos los datos
	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
	if (count($sizeArray)> 1) {
	    texto($sizeArray[0],0,82,1,0,$arialBold,$black,10.5,0,0);
	    texto('('.$sizeArray[1],0,98,1,0,$arialBold,$black,10.5,0,0);
	} else {
	    texto($SIZE,0,92,1,0,$arialBold,$black,12,0,0);
	}
    parrafo($DESCRIPTION, 0, 120, 1, 0, $arialBold, $black, 7, 0, 28, 11);
    texto('DEPT '.$DEPT, 12, 156, 0, 0, $arialNBold, $black, 7, 0, 0);
    texto('E', 10, 260, 0, 0, $epc_logo, $black, 18, 0, 0);
	texto($PRICE, 0, 320, 1, 0, $arialBold, $black, 14, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 11, 150, 1.1, 64, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>