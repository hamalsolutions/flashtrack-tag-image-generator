<?php                      //   1       2         3        4      5         7   
    $correctos = array('QTY','STYLE','COLOR','COLORCODE','SIZE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SJU523118');
        $COLOR = asignar(2,'BLK');
        $COLORCODE = asignar(3,'001');
        $SIZE = asignar(4,'5');
        $UPC = asignar(5,'048238055041');
        $DESCRIPTION = asignar(6,'S/J PANT');
        
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',0,300,2,15,$logo,$black,24,0,0);
        
        texto($STYLE,12,115,0,0,$arialBold,$black,12,0,0);
        
        texto($COLOR,12,135,0,0,$arialBold,$black,10,0,0);
        
        texto($COLORCODE,12,155,0,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,12,175,0,0,$arialBold,$black,10,0,0);
        
        texto($UPC,12,195,0,0,$arialBold,$black,10,0,0);
        
        texto($DESCRIPTION,12,215,0,0,$arialBold,$black,8,0,0);
        
        require_once('../includes/footer.php');
    }
?>
