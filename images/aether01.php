<?php //     1          2       3      4      5      6
    $correctos = array('QTY','STYLE NAME','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLENAME = asignar(1,'STORMY');
		$STYLE = asignar(2, 'MO0023');
        $COLOR = asignar(3,'TOTAL ECLIPSE');
		$SIZE = asignar(4, '2');
        $UPC = asignar(5,'490320705844');
		$PRICE = asignar(6, '$225.00');
        
            // Creacion del formato
        formato(122,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('aether.ttf');
		$arialNBold = fuente('arialnb.ttf');

        // Introducimos los datos
        agujero(59, 20);
        
        texto('E',0,87,1,0,$logo,$black,43,0,0);

		//texto($STYLENAME,0,110,1,0,$arialBold,$black,7,0,0);

		if (strlen($STYLENAME) > 20) {
			texto($STYLENAME, 0, 110, 1, 0, $arialNBold, $black, 7, 0, 0);
		} else {
			texto($STYLENAME, 0, 110, 1, 0, $arialBold, $black, 7, 0, 0);
		}

        texto($STYLE,0,125,1,0,$arialBold,$black,7,0,0);

		if (strlen($COLOR) > 20) {
			texto($COLOR, 0, 140, 1, 0, $arialNBold, $black, 7, 0, 0);
		} else {
			texto($COLOR, 0, 140, 1, 0, $arialBold, $black, 7, 0, 0);
		}

        texto('SIZE',0,155,1,0,$arialBold,$black,7,0,0);
        texto($SIZE,0,167,1,0,$arialBold,$black,9,0,0);
        
        texto('MANUFACTURERS',10,275,0,0,$arial,$black,5,0,0);
		texto('SUGGESTED', 10, 284, 0, 0, $arial, $black, 5, 0, 0);
		texto('RETAIL PRICE', 10, 293, 0, 0, $arial, $black, 5, 0, 0);
		texto($PRICE, 0, 293, 2, 8, $arialNBold, $black, 12, 0, 1);
        
        perforacion(122, 20, 260);
        
        // Creacion del Barcode
        barcode($UPC,5,185,1,40,'UPC');
        
        barcodeTexto(2,-1,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
