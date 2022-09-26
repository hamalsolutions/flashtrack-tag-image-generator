<?php                       //   1       2       3     4     5       6     7       8
    $correctos = array('QTY','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'5XL');
                
        // I want to create a round sticker image
        
        // Creacion del formato
        // This is a ROUND 3/4" Sticker format
        formato(75,75,255,255,255);
        setAsSticker(40);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        //$arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        texto($SIZE,0,50,1,0,$arialBold,$black,24,0,0);
        
        require_once('../includes/footer.php');
    }
?>