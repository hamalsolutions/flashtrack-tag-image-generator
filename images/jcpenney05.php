<?php                      //   1       2     3     4       5 
    $correctos = array('QTY','COLOR','SIZE','SKU','CAT#','SUPPLIER');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HOT PINK');
        $SIZE = asignar(2,'SMALL');
        $SKU = asignar(3,'0133');
        $CAT = asignar(4,'632-9006');
        $SUPPLIER = asignar(5,'10433-1');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($CAT,0,38,1,0,$arialBold,$black,25,0,0);
        
        texto($SKU,0,68,1,0,$arialBold,$black,25,0,0);
        
        imageline($img,0,75,200,75,$black);
        imageline($img,0,76,200,76,$black);
        
        texto($SIZE,12,105,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,105,2,5,$arial,$black,9,0,0);
        
        texto($SUPPLIER,0,135,1,0,$arialBold,$black,13,0,0);
        
        require_once('../includes/footer.php');
    }
?>
