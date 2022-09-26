<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','SIZE','UPC');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'D1080');
        $DESCRIPTION = asignar(2,'48%RAYON 42%POLYESTER 10%SPANDEX');
        $COLOR = asignar(3,'NAVY PAPAYA WATERLILLY BORDER');
        $SIZE = asignar(4,'1X');
        $UPC = asignar(5,'813468011910');
        
        
            // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow= fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,0,25,1,0,$arialNarrow,$black,8.5,0,0);
        
        texto('STYLE # '. $STYLE,0,60,1,0,$arial,$black,9.5,0,0);
        
        texto('COLOR: '. $COLOR,0,75,1,0,$arialNarrow,$black,7.7,0,0);
        
        texto('SIZE: ' . $SIZE,0,105,1,0,$arialNarrow,$black,12,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,90,1.3,80,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
