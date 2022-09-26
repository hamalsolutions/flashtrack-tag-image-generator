<?php //                    1       2          3         4      5      6       7         8         9        10
$correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE','UPC','SEASON','DEPT','SUBCLASS','FINELINE','PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $STYLE = asignar(1, 'NB12100056936');
    $COLOR = asignar(2, 'BLACK');
    $DESCRIPTION = asignar(3, 'NB RUSCHED POLO');
    $SIZE = asignar(4, 'XS (1)');
    $UPC = asignar(5, '196202070221');
    $SEASON = asignar(6, '01-22');
    $DEPT = asignar(7, '00');
	$SUBCLASS = asignar(8, '34');
	$FINELINE = asignar(9, '9132');
    $PRICE = asignar(10, '12.98');

	// Creacion del formato
    formato(213, 131, 255, 255, 255);
    setAsSticker(12);
	// Colores a usar
	$black = color(0, 0, 0);
	$white = color(255, 255, 255);
	$LogoBlue = color(0, 85, 184);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNB = fuente('arialnb.ttf');
    $epc_logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto($SIZE,0,18,3,-56,$arialNB,$black,9.5,0,0);

    if (strlen ($DESCRIPTION)>26) {
        texto ($DESCRIPTION, 0, 32, 3, -56, $arialNB, $black, 6.5, 0, 0);
    } else {
        texto($DESCRIPTION,0,32,3,-56,$arialBold,$black,6.5,0,0);
    }

	$DSF = $DEPT . $SUBCLASS . $FINELINE;
    texto($DSF, 66, 46, 0, 0, $arialNB, $black, 7, 0, 0);
    texto($COLOR, 0, 46, 2, 12, $arialNB, $black, 6.5, 0, 0);
    texto($SEASON, 66, 60, 0, 0, $arial, $black, 6.5, 0, 0);
    texto($STYLE, 0, 60, 2, 12, $arial, $black, 6.5, 0, 0);

    texto('E', 14, 110, 0, 0, $epc_logo, $black, 22, 0, 0);
    texto ($PRICE, 0,126,3,-56, $arialNB, $black, 9.5, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 68, 61, 1.1, 38, 'UPC');
	barcodeTexto(2, 0, 0, 5, 'arial.ttf');
	require_once('../includes/footer.php');
}
?>