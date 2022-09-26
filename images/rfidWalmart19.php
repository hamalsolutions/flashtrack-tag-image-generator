<?php //                    1       2    3      4      5       6        7         8
$correctos = array('QTY','VSN','COLOR','SIZE','UPC','SEASON','DEPT','FINELINE','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $VSN = asignar(1, 'GT98N2ZPMT');
    $COLOR = asignar(2, 'WHITE');
    $SIZE = asignar(3, 'XS (1)');
    $UPC = asignar(4, '639858584839');
    $SEASON = asignar(5, '0120');
    $DEPT = asignar(6, '023');
	$FINELINE = asignar(7, '00 F/L 3706');
    $PRICE = asignar(8, '12.88');

	// Creacion del formato
    formato(325, 100, 255, 255, 255); // because of the of the 90 rotacion
                                                                  // the image is rotated as width: 100, length: 100
    $anguloDeRotacion = 90; // 90 Allows fields rotated to the left, 270 rotated to the right

	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);
	//$LogoBlue = color(0, 85, 184);
	//$pink = color(229, 109, 177);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');
	//$logo = fuente('Walmart_2010_Logo.ttf');
    //$logo = fuente('w.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');
	agujero(25, 50);  //OK
    texto('E', 0, 29, 2, 10, $epc_logo, $black, 20, 90, 0);
	cajaVacia(5, 217, 88, 36, $black,90);
	texto('SIZE', 10, 82, 0, 0, $arial, $black, 6, 90, 0);

	// Introducimos los datos
	$sizeArray = explode('(', str_replace(' ', '', $SIZE));
	if (count($sizeArray)> 1) {
	    texto($sizeArray[0],0,87,1,0,$arialBold,$black,10.5,90,0);
	    texto('('.$sizeArray[1],0,101,1,0,$arialBold,$black,10.5,90,0);
	} else {
	    texto($SIZE,0,98,1,0,$arialBold,$black,12,90,0);
	}

    //texto($FINELINE,texto($SUB,texto($DEPT,10,135,0,65,$arialNBold,$black,7,0,0)-6,122,0,45,$arial,$black,8,0,0)-6,122,0,15,$arial,$black,8,0,0);
	//$DSF = $DEPT . $SUB . $FINELINE;
	//texto($DSF, 10, 137, 0, 0, $arial, $black, 6.5, 0, 0);
    texto($FINELINE,136,15,0,0,$arial,$black,7,0,0);
    texto($COLOR, 0, 15, 2,50, $arial, $black, 6.5, 0, 0);
	texto($SEASON, 136, 30, 0, 0, $arial, $black, 6.5, 0, 0);
	texto($VSN, 0, 30, 2, 50, $arial, $black, 6.5, 0, 0);
    texto($DEPT, 0, 45, 2, 50, $arial, $black, 6.5, 0, 0);
    //texto($SUPP, 0, 164, 2, 8, $arial, $black, 6.5, 0, 0);
    perforacion(120, 325, 287);
	texto($PRICE, 0, 310, 1, 0, $arial, $black, 11, 90, 1);

	// Creacion del Barcode
	barcode($UPC, 148, 50, 1, 30, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>