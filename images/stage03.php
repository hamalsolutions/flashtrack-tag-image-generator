<?php                    //    1        2     3      4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','CLASS','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
		$COLOR = asignar(1, 'DARK BLUE/BLACK VINTAGE');
		$SIZE = asignar(2, '1');
		$STYLE = asignar(3, 'J1240AG2');
		$UPC = asignar(4, '614015053106');
		$CLASS = asignar(5, '325');
		$DEPT = asignar(6, '1716');
		$PRICE = asignar(7, '50.00');
        
            // Creacion del formato
		formato(170, 300, 255, 255, 255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
		$arialNB = fuente('arialnb.ttf');

        // Introducimos los datos
		agujero(85, 25);

		texto('DPT ' . $DEPT . '        ' . 'CL ' . $CLASS, 0, 55, 1, 0, $arial, $black, 8, 0, 0);

		texto('VPN', 28, 90, 0, 0, $arialBold, $black, 9, 0, 0);

		texto($STYLE, 0, 90, 2, 24, $arialBold, $black, 9, 0, 0);

		texto('Color: ' . substr($COLOR, 0, 19), 12, 205, 0, 0, $arialNB, $black, 9, 0, 0);
		texto('Size: ' . $SIZE, 12, 230, 0, 0, $arialBold, $black, 9, 0, 0);

		texto($PRICE, 0, 278, 1, 0, $arial, $black, 16, 0, 1);
        
        // Creacion del Barcode
        barcode($UPC,15,78,1.2,90,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
