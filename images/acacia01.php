<?php                      //   1       2     3     4       5 
    $correctos = array('QTY','ITEM','PATTERN','COLOR','SIZE','MADEIN','FABRIC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $ITEM = asignar(1,'LM2005P577');
        $PATTERN = asignar(2,'-------');
        $COLOR = asignar(3,'LATTE');
        $SIZE = asignar(4,'4');
        $MADEIN = asignar(5,'CHINA');
        $FABRIC = asignar(6,'82% COTTON 16% POLYESTER 2% SPANDEX');
                
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('ACACIA CATALOG',28,18,0,0,$arialBold,$black,12,0,0);
        
        texto('Item:',10,36,0,0,$arial,$black,10,0,0);
        texto($ITEM,80,36,0,0,$arialBold,$black,10,0,0);
        
        texto('Pattern:',10,52,0,0,$arial,$black,10,0,0);
        texto($PATTERN,80,52,0,0,$arialBold,$black,10,0,0);
        
        texto('Color:',10,68,0,0,$arial,$black,10,0,0);
        texto($COLOR,80,68,0,0,$arialBold,$black,10,0,0);
        
        texto('Size:',10,84,0,0,$arial,$black,10,0,0);
        texto($SIZE,80,84,0,0,$arialBold,$black,10,0,0);
        
        texto('Made in:',10,100,0,0,$arial,$black,10,0,0);
        texto($MADEIN,80,100,0,0,$arialBold,$black,10,0,0);
        
        texto('Fiber Content:',10,116,0,0,$arial,$black,10,0,0);
        parrafo($FABRIC, 0, 130, 1, 0, $arialBold, $black, 8, 0, 26, 12);
        
        require_once('../includes/footer.php');
    }
?>
