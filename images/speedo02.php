<?php                       //   1       2       3     4       5
    $correctos = array('QTY','ITEM','COLOR CODE','COLOR','SIZE','WEEK','FTY','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $ITEM = asignar(1,'7530309');
        $COLORCODE = asignar(2,'004');
        $COLOR = asignar(3,'BLUE');
        $SIZE = asignar(4,'M');
        $WEEK = asignar(5,'21-08');
        $FTY = asignar(6,'0003');
        $UPC = asignar(7,'123456789012');
        
        // Creacion del formato
        formato(250,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($ITEM,10,22,0,0,$arial,$black,10,0,0);
        
        texto($COLORCODE,10,37,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,10,52,0,0,$arial,$black,10,0,0);
        
        
        imagefilledellipse($img,25,70,15,15,$transparent);
        imageellipse($img,25,70,15,15,$gray);
        
        
        texto($SIZE,10,97,0,0,$arial,$black,10,0,0);
        
        texto($WEEK,10,112,0,0,$arial,$black,10,0,0);
        
        texto($FTY,10,127,0,0,$arial,$black,10,0,0);
        
        
        texto($UPC,100,137,0,0,$arial,$black,12,0,0);
        
        // Creacion del Barcode
        barcode($UPC,65,10,1.3,110,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
