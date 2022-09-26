<?php //                    1        2        3           4            5           6           7        8
$correctos = array('QTY', 'DEPT', 'SIZE', 'COUNTRY', 'ITEM NUMBER', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, 'Home Decor');
	$SIZE = asignar(2, 'Medium');
	$COUNTRY = asignar(3, 'Made in Mexico');
	$ITEMNUMBER = asignar(4, '1506336');
	$PRICE = asignar(5, '$17.99');
	// Creacion del formato
	formato(150, 150, 255, 255, 255);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	//$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	agujero(75, 25);

	texto($PRICE, 0, 54, 1, 0, $arialBold, $black, 12, 0, 1);

	texto($DEPT, 0, 70, 1, 0, $arialNBold, $black, 6.5, 0, 0);

	texto($SIZE, 0, 82, 1, 0, $arialNBold, $black, 6.5, 0, 0);

	texto('Distributed by:', 0, 96, 1, 0, $arialNBold, $black, 6.5, 0, 0);
	texto('Hobby Lobby', 0, 107, 1, 0, $arialNBold, $black, 6.5, 0, 0);
	texto('Oklahoma City, OK 73179', 0, 118, 1, 0, $arialNBold, $black, 6.5, 0, 0);
	texto('www.hobbylobby.com  ' . $COUNTRY, 0, 129, 1, 0, $arialNBold, $black, 6.5, 0, 0);

	texto($ITEMNUMBER, 0, 144, 1, 0, $arialNBold, $black, 6.5, 0, 0);

	// Creacion del Barcode

	require_once('../includes/footer.php');
}
?>
