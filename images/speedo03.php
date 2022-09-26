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
        formato(225,113,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($ITEM,10,22,0,0,$arial,$black,10,0,0);
        
        texto($COLORCODE,10,37,0,0,$arial,$black,10,0,0);
        
        if (strlen($COLOR)<8)
            texto($COLOR,10,52,0,0,$arial,$black,10,0,0);
        else
            if (strlen($COLOR)<13)
                texto($COLOR,10,52,0,0,$arialNarrow,$black,8,0,0);
            else
                texto($COLOR,7,52,0,0,$arialNarrow,$black,7,0,0);
        
        
        
        texto($SIZE,10,77,0,0,$arial,$black,10,0,0);
        
        texto($WEEK,10,92,0,0,$arial,$black,10,0,0);
        
        texto($FTY,10,107,0,0,$arial,$black,10,0,0);
        
        
        texto($UPC,102,107,0,0,$arial,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,70,10,1.2,80,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
