<?php                    //      1       2   
    $correctos = array('QTY','BARCODE','ITEM');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $BARCODE = asignar(1,'91212');
        $ITEM = asignar(2,'303723 WHI 32 B');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($BARCODE,0,103,1,0,$arial,$black,10,0,0);
        
        texto($ITEM,0,133,1,0,$arial,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($BARCODE,35,12,1,75,'39');
        
        require_once('../includes/footer.php');
    }
?>
