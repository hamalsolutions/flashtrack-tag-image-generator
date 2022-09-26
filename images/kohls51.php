<?php                      //   1      2       3      4     5       6        7         8
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DEPT','CLASS','SUBCLASS','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'HTC21825');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'MEDIUM');
        $UPC = asignar(4,'006889360815');
        $DEPT = asignar(5,'114');
        $CLASS = asignar(6,'70');
        $SUB = asignar(7,'74');
        $PRICE = asignar(8,'12.00');
       
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KOHLS_LOGO-B.ttf');
        
        agujero(85, 25);
        
        // Introducimos los datos
        texto('k',0,60,1,0,$logo,$black,26,0,0);
        
        texto('kohls.com',0,70,1,0,$arial,$black,8,0,0);
        
        texto($DEPT,0,90,3,100,$arialBold,$black,10,0,0);
        
        texto($CLASS,0,90,1,0,$arialBold,$black,10,0,0);
        
        texto($SUB,0,90,3,-100,$arialBold,$black,10,0,0);
        
        texto('STYLE',25,110,0,0,$arial,$black,8,0,0);
        texto($STYLE,70,110,0,0,$arialBold,$black,8,0,0);
        
        texto('COLOR',25,130,0,0,$arial,$black,8,0,0);
        texto($COLOR,70,130,0,0,$arialBold,$black,8,0,0);
        
        texto('SIZE',0,155,1,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,167,1,0,$arialBold,$black,9,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,8,135,1.3,90,'UPC');
        
        barcodeTexto(1,-1,-2,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
