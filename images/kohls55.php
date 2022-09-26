<?php //                    1        2          3          4         5
$correctos = array('QTY', 'DEPT', 'CLASS', 'SUB CLASS', 'STYLE', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$DEPT = asignar(1, '012');
	$CLASS = asignar(2, '00');
	$SUBCLASS = asignar(3, '00');
	$STYLE = asignar(4, '123456');
	$PRICE = asignar(5, '10.00');

	// Creacion del formato
	formato(150, 100, 255, 255, 255);
	setAsSticker(10);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arialBlack = fuente('ariblk.ttf');

	// Introducimos los datos

	texto('KOHL\'S', 10, 19, 0, 0, $arialBlack, $black, 10, 0, 0);
	texto('Kohls.com', 10, 30, 0, 0, $arial, $black, 6.5, 0, 0);

	texto($DEPT, 10, 49, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($CLASS, 40, 49, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($SUBCLASS, 70, 49, 0, 0, $arialBold, $black, 9, 0, 0);

	texto('Style ' . $STYLE, 10, 69, 0, 0, $arialBold, $black, 9, 0, 0);

	texto($PRICE, 0, 92, 1, 0, $arialBold, $black, 9, 0, 1);

	require_once('../includes/footer.php');
}
?>