<?php //     1      2      3      4       5      6      7
$correctos = array('QTY', 'DEPT', 'CLASS', 'SUB', 'STYLE', 'SIZE', 'PRICE', 'UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
		// Valores por default para presentar en el formato
		$DEPT = asignar(1, '024');
		$CLASS = asignar(2, '50');
		$SUB = asignar(3, '12');
		$STYLE = asignar(4, 'MEXXFWFGSV');
		$SIZE = asignar(5, 'XS');
        $PRICE = asignar(6,'$20.00');
		$UPC = asignar(7, '190121400961');

		// Creacion del formato
		formato(200, 150, 255, 255, 255);

		setAsSticker(10);

		// Colores a usar
        $black = color(0,0,0);

		// Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
		texto('KOHL\'S', 10, 20, 0, 0, $arialBold, $black, 13, 0, 0);

		texto('Kohls.com', 10, 40, 0, 0, $arialBold, $black, 9, 0, 0);

		texto('STYLE ', 10, 55, 0, 0, $arialBold, $black, 8, 0, 0);

		texto($STYLE, 50, 55, 0, 0, $arial, $black, 8, 0, 0);

		texto($DEPT, 0, 40, 3, -60, $arialBold, $black, 10, 0, 0);

		texto($CLASS, 0, 40, 3, -113, $arialBold, $black, 10, 0, 0);

		texto($SUB, 0, 40, 3, -160, $arialBold, $black, 10, 0, 0);

		texto($SIZE, 0, 55, 3, -160, $arial, $black, 8, 0, 0);

		texto($PRICE, 0, 20, 2, 10, $arialBold, $black, 8, 0, 1);

        // Creacion del Barcode
		barcode($UPC, 18, 53, 1.35, 75, 'UPC');

		barcodeTexto(1, 1, -1, 5, 'arialbd.ttf');

		require_once('../includes/footer.php');
    }
?>