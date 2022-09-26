<?php                      //   1       2       3     4      5
    $correctos = array('QTY','SIZE','DESCRIPTION','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'L');
        $DESCRIPTION = asignar(2,'DESCRIPTION');
        $STYLE = asignar(3,'123456789');
        $UPC = asignar(4,'819146013825');
        $PRICE = asignar(5,'18.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('ITS_SUGAR_LOGO.ttf');
        
        // Introducimos los datos
        texto('I',0,50,1,0,$logo,$black,26,0,0);
        
        texto($SIZE,0,70,1,0,$arialBold,$black,18,0,0);
        texto($DESCRIPTION,0,85,1,0,$arial,$black,7,0,0);
        texto($STYLE,0,95,1,0,$arial,$black,7,0,0);
        
        texto('Distributed by IT\'SUGAR LLC',0,110,1,0,$arial,$black,7,0,0);
        texto('Deerfield Beach, FL 33442',0,120,1,0,$arial,$black,7,0,0);
        texto('ITSUGAR.COM',0,130,1,0,$arial,$black,7,0,0);
        
        texto($PRICE,0,247,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,140,1,60,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
