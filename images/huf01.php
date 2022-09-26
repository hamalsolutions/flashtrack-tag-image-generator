<?php                     //       1            2        3       4       5
    $correctos = array('QTY','STYLE NAME','COLOR NAME','SIZE','STYLE#','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLENAME = asignar(1,'PLAYBOY BRUSH P/O HOODIE');
        $COLORNAME = asignar(2,'BLACK');
        $SIZE = asignar(3,'S');
        $STYLE = asignar(4,'PF00530');
        $UPC = asignar(5,'888401972085');
        
        // Creacion del formato
        formato(150,188,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialN = fuente('arialn.ttf');
		$arial70 = fuente('Arial_70.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('HUF_LOGO_2.ttf');
        
            // Introducimos los datos
        
        texto('H',0,24,1,0,$logo,$black,22,0,0);


        texto('STYLE NAME:', 10, 36, 0, 0, $arialBold, $black, 6.5, 0, 0);
        texto('COLOR:', 10, 58, 0, 0, $arialBold, $black, 6.5, 0, 0);
        texto('SIZE:',10,80,0,0,$arialBold,$black,6.5,0,0);
        texto('STYLE#:',10,102,0,0,$arialBold,$black,6.5,0,0);

        if (strlen($STYLENAME) > 25) {
			texto($STYLENAME, 10, 46, 0, 0, $arialN, $black, 6.5, 0, 0);
		} else {
			texto($STYLENAME, 10, 46, 0, 0, $arial, $black, 6.5, 0, 0);
		}

        texto($COLORNAME,10,68,0,0,$arial,$black,6.5,0,0);
        texto($SIZE,10,91,0,0,$arial,$black,6.5,0,0);
        texto($STYLE,10,113,0,0,$arial,$black,6.5,0,0);
        
        // Creacion del Barcode
        barcode($UPC,10,108,1.10,62,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
