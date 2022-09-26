<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COMPARE PRICE','COLOR','SIZE','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'43297');
        $COMPARE = asignar(2,'74.00');
        $COLOR = asignar(3,'BURGANDY');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'811723020790');
        $PRICE = asignar(6,'44.99');
        
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logoBloom = fuente('bloomingdales_Logo.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        
        // Introducimos los datos
        
        agujero(79, 20);
        
        texto('A',10,60,0,0,$logoBloom,$black,40,0,0);
        texto('B',55,47,0,0,$logoBloom,$black,11,0,0);
        
        texto($STYLE,0,85,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,105,1,0,$arialNarrow,$black,9,0,0);
        
        texto($SIZE,0,217,1,0,$arialBold,$black,14,0,0);
        
        texto($COMPARE,texto('COMPARE AT',10,255,0,0,$arialNarrow,$black,9,0,0)-5,255,0,0,$arialBoldSlash,$black,9,0,1);
        
        perforacion(150, 325, 280);
        
        texto($PRICE,0,310,2,20,$arialBold,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,120,1,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
