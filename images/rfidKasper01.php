<?php //                          1             2           3              4          5          6        7       8       9
$correctos = array('QTY', 'MATERIAL-NUMBER', 'GROUP', 'DESCRIPTION', 'COLOR-CODE', 'PO-SO', 'ZSUT-PCS', 'SIZE', 'MSRP', 'UPC');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
    $MATERIAL_NUMBER = asignar(1, '10727468-169');
	$GROUP = asignar(2, 'GROUP');
    $DESCRIPTION = asignar(3, 'CHELSEA PANT-BLACK');
    $COLOR_CODE = asignar(4, '169');
    $PO_SO = asignar(5, '4501077369');
	$ZSUT_PCS = asignar(6, '3PC');
    $SIZE = asignar(7, 'XS');
	$MSRP = asignar(8, '79.00');
	$UPC = asignar(9, '093487630297');

	// Creacion del formato
	formato(252, 252, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);
	$ZSUT_PCS = trim($ZSUT_PCS);
	$ZSUT_PCS = strtoupper($ZSUT_PCS);
	$ZSUT_PCS = str_replace('PC', '', $ZSUT_PCS);
	// Fuentes a usar
	$arialBold = fuente('arialbd.ttf');
	$logo = fuente('EPC_Logo.ttf');
	$vicsColor = colorVic($SIZE);

	// Introducimos los datos

	texto('E', 0, 30, 2, 12, $logo, $black, 20, 0, 0);

    texto($MATERIAL_NUMBER, 15, 55, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($GROUP, 0, 55, 2, 12, $arialBold, $black, 9, 0, 0);

	parrafo($DESCRIPTION, 50, 72, 0, 0, $arialBold, $black, 8, 0, 24, 12);

	texto($COLOR_CODE, 50, 97, 0, 0, $arialBold, $black, 8, 0, 0);

	texto($PO_SO, 50, 111, 0, 0, $arialBold, $black, 8, 0, 0);

    if ($ZSUT_PCS <> '' && $ZSUT_PCS <> '0')
		texto($ZSUT_PCS . ' PC', 160, 106, 0, 0, $arialBold, $black, 12, 0, 0);

	cajaRellena(1, 192, 249, 28, $vicsColor, $vicsColor);

    texto('US/CA ' . $SIZE, 0, 205, 1, 0, $arialBold, $black, 8, 0, 0);

    $trans = getSizeTranslations($SIZE);
    texto('ES/FR/PT ' . $trans['ES/FR/PT'] . '   DE ' . $trans['DE'] . '   UK ' . $trans['UK'], 0, 218, 1, 0, $arialBold, $black, 8, 0, 0);

	texto('SUGG RETAIL/ PRIX SUGG', 20, 244, 0, 0, $arialBold, $black, 8, 0, 0);

	perforacion(253, 300, 225);

	texto($MSRP, 0, 244, 2, 10, $arialBold, $black, 10, 0, 1);

	// Creacion del Barcode
	barcode($UPC, 28, 78, 1.5, 85, 'UPC');

	barcodeTexto(1, -1, 0, 5, 'arialbd.ttf');

	require_once('../includes/footer.php');
}
?>


