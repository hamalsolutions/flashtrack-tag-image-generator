<?php                      //   1       2       3         4
    $correctos = array('QTY','ITEM','COLOR','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $ITEM = asignar(1,'5625-292588');
        $COLOR = asignar(2,'Black');
        $SIZE = asignar(3,'2XL');
        $DESCRIPTION = asignar(4,'Venom');
                       
            // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('tapoutLogo.ttf');
        
        // Introducimos los datos
        texto('T',0,85,1,0,$logo,$black,90,0,0);
        
        texto('ITEM #:',5,115,0,0,$arial,$black,7,0,0);
        texto($ITEM,35,115,0,0,$arial,$black,7,0,0);
        
        texto('Color:',5,135,0,0,$arial,$black,7,0,0);
        texto($COLOR,35,135,0,0,$arial,$black,7,0,0);
        
        texto('Description:',5,155,0,0,$arial,$black,7,0,0);
        texto($DESCRIPTION,60,155,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,190,1,0,$arialBold,$black,14,0,0);
        
        
        require_once('../includes/footer.php');
    }
?>
