<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WBT808');
        $COLOR = asignar(2,'BLUSH');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'811723020790');
        $PRICE = asignar(5,'34.99');
        
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,0,75,1,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,105,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,225,1,0,$arialBold,$black,14,0,0);
        
        perforacion(167, 287, 250);
        
        texto($PRICE,0,275,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,30,120,1,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
