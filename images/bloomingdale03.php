<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','FABRIC','COLOR','SIZE','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'D1080');
        $FABRIC = asignar(2,'48%RAYON 42%POLYESTER 10%SPANDEX');
        $COLOR = asignar(3,'PAINTED DOTS');
        $SIZE = asignar(4,'1X');
        $UPC = asignar(5,'813468011910');
        $PRICE = asignar(6,'295.00');
        
        
            // Creacion del formato
        formato(200,350,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('MASSE',0,45,1,0,$arialBold,$black,14,0,0);
        
        texto($STYLE,15,60,0,0,$arial,$black,9.5,0,0);
        
        texto($COLOR,0,60,2,20,$arialNarrow,$black,7.7,0,0);
        
        parrafo($FABRIC,15,190,0,0,$arialNarrow,$black,8.5, 0, 15, 10);
        texto($SIZE,0,200,2,20,$arialNarrow,$black,18,0,0);
        
        parrafo("MANUFACTURER'S SUGGESTED RETAIL PRICE:",15,310,0,0,$arialNarrow,$black,8.5, 0, 15, 10);
        texto($PRICE,0,325,2,20,$arialNarrow,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,60,1.3,100,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
