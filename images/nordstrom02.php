<?php                     //    1     2           3          4      5
    $correctos = array('QTY','UPC','STYLE','DESCRIPTION','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'001234567895');
        $STYLE = asignar(2,'15095');
        $DESCRIPTION = asignar(3,'COTTON SKIRT');
        $COLOR = asignar(4,'BLACK');
        $SIZE = asignar(5,'SMALL');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
		$arial70 = fuente('Arial_70.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('nordstrom_2010.ttf');
        
            // Introducimos los datos
        
        texto('N',0,26,1,0,$logo,$black,15,0,0);
        
        texto($STYLE,15,45,0,0,$arial,$black,10,0,0);
		if (strlen($DESCRIPTION) > 21) {
			texto($DESCRIPTION, 15, 62, 0, 0, $arial70, $black, 10, 0, 0);
		} else {
			texto($DESCRIPTION, 15, 62, 0, 0, $arial, $black, 10, 0, 0);
		}

        
        texto($COLOR,15,78,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,15,93,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,83,1.3,90,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
