<?php                      //  1       2       3        4        5      6
    $correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'EG-1352-114-425');
        $COLOR = asignar(2,'WHITE');
        $DESCRIPTION = asignar(3,'REVERSE PRINT');
        $SIZE = asignar(4,'L');
                
            // Creacion del formato
        formato(188,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('STYLE#',10,30,0,0,$arial,$black,7.5,0,0);
        
        texto($STYLE,55,30,0,0,$arialBold,$black,9,0,0);
        
        texto('COLOR:',10,50,0,0,$arial,$black,7.5,0,0);
        
        texto($COLOR,55,50,0,0,$arialBold,$black,9,0,0);
        
        texto('DESCRIPTION:',10,70,0,0,$arial,$black,7.5,0,0);
        
        texto($DESCRIPTION,55,90,0,0,$arialBold,$black,9,0,0);
        
        texto('SIZE:',10,130,0,0,$arial,$black,7.5,0,0);
        
        texto($SIZE,50,130,0,0,$arial,$black,15,0,0);
        
        require_once('../includes/footer.php');
    }
?>