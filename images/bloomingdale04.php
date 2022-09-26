<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COMPARE PRICE','COLOR','SIZE','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TA10417');
        $COMPARE = asignar(2,'78.00');
        $COLOR = asignar(3,'OFF WHITE');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'811723020790');
        $PRICE = asignar(6,'34.99');
        
        
            // Creacion del formato
        formato(137,287,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logoBloom = fuente('bloomingdales_Logo.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        
        // Introducimos los datos
        
        texto('bloomingdales',20,30,0,0,$logoBloom,$black,13,0,0);
        
        texto('Outlet',0,55,1,0,$arialNarrow,$black,11,0,0);
        
        texto($STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,95,1,0,$arialNarrow,$black,9,0,0);
        
        texto($SIZE,0,200,1,0,$arialBold,$black,12,0,0);
        
        texto($COMPARE,texto('COMPARE AT',10,230,0,0,$arialNarrow,$black,9,0,0)-10,230,0,0,$arialBoldSlash,$black,9,0,1);
        
        perforacion(137, 287, 250);
        
        texto($PRICE,0,270,2,20,$arialBold,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,10,110,1,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
