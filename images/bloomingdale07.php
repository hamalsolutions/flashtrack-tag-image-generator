<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COMPARE PRICE','COLOR','SIZE','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ABCD1234');
        $COMPARE = asignar(2,'76.00');
        $COLOR = asignar(3,'BLACK');
        $SIZE = asignar(4,'27');
        $UPC = asignar(5,'123456123526');
        $PRICE = asignar(6,'22.99');
        
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logoBloom = fuente('bloomingdales_Logo.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto('A',10,70,0,0,$logoBloom,$black,48,0,0);
        texto('B',65,47,0,0,$logoBloom,$black,9,0,0);
        
        texto($STYLE,0,95,1,0,$arialBold,$black,10,0,0);
        
        texto($COLOR,0,110,1,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,0,195,2,20,$arialBold,$black,18,0,0);
        
        texto($COMPARE,texto('COMPARE AT',25,210,0,0,$arialBold,$black,8,0,0)-15,210,0,0,$arialBoldSlash,$black,8,0,1);
        
        perforacion();
        
        texto($PRICE,0,285,2,10,$arial,$black,22,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,100,1.2,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
