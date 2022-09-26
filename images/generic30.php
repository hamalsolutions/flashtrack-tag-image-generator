<?php //                    1        2        3           4            5           6           7        8
$correctos = array('QTY', 'DEPT', 'SIZE', 'COUNTRY', 'SKU', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, 'HOME DECOR');
	$SIZE = asignar(2, 'Medium');
	$COUNTRY = asignar(3, 'Made in U.S.A.');
	$ITEMNUMBER = asignar(4, '1318757');
	$PRICE = asignar(5, '$19.99');
	// Creacion del formato
	formato(150, 150, 255, 255, 255);
	setAsSticker(10);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	//$arialNBold = fuente('arialnb.ttf');

	// Introducimos los datos
	// agujero(75, 25);

	texto($PRICE, 0, 25, 1, 0, $arialBold, $black, 14, 0, 1);

	texto($DEPT, 0, 48, 1, 0, $arial, $black, 9, 0, 0);

	texto($SIZE, 0, 64, 1, 0, $arialBold, $black, 9, 0, 0);

	texto('Distributed by:', 0, 80, 1, 0, $arial, $black, 8, 0, 0);
	texto('Hobby Lobby', 0, 92, 1, 0, $arial, $black, 8, 0, 0);
	texto('Oklahoma City, OK 73179', 0, 104, 1, 0, $arial, $black, 8, 0, 0);
	texto('www.hobbylobby.com', 0, 116, 1, 0, $arial, $black, 8, 0, 0);
	texto($COUNTRY, 0, 128, 1, 0, $arial, $black, 8, 0, 0);
	texto($ITEMNUMBER, 0, 144, 1, 0, $arialBold, $black, 8, 0, 0);

	// Creacion del Barcode

	require_once('../includes/footer.php');
}
?>
