<?php //                    1          2         3           4
$correctos = array('QTY', 'STYLE', 'COLOR', 'PCS-SET', 'DESCRIPTION');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '123456789');
    $COLOR = asignar(2, 'BLACK');
    $PCS = asignar(3, '2PC SET');
    $DESCRIPT = asignar(4, 'DESCRIPTION');

	// Creacion del formato
	formato(150, 100, 255, 255, 255);
    setAsSticker(15);

	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialN = fuente('arialn.ttf');
	// Introducimos los datos
    texto($STYLE, 0, 25, 1, 0, $arial, $black, 9, 0, 0);

    If (strlen($COLOR) < 18) {
        texto($COLOR, 0, 42, 1, 0, $arial, $black, 9, 0, 0);
    } else {
        texto($COLOR, 0, 42, 1, 0, $arialN, $black, 9, 0, 0);
    }

    texto($PCS, 0,67, 1, 0, $arial, $black, 9, 0, 0);

    If (strlen($DESCRIPT) < 18) {
        texto($DESCRIPT, 0, 84, 1, 0, $arial, $black, 9, 0, 0);
    } else {
        texto($DESCRIPT, 0, 84, 1, 0, $arialN, $black, 9, 0, 0);
    }

	require_once('../includes/footer.php');
}
?>