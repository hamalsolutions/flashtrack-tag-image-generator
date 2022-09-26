<?php                                    //    1          2          3          4         5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','MATERIAL','DESCRIPTION','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'SS');
        $STYLE = asignar(3,'TR517');
        $MATERIAL = asignar(4,'VRH5BLKS');
        $DESCRIPTION = asignar(5,'M TR517');
        $SEASON = asignar(6,'HOL 12');
        
            // Creacion del formato 
        formato(150,250,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,0,35,1,0,$arial,$black,14,0,0);
        
        texto($MATERIAL,0,75,1,0,$arial,$black,14,0,0);
        
        if (strlen($DESCRIPTION)>10)
             if (strlen($DESCRIPTION)>18)
                 if (strlen($DESCRIPTION)>30)
                    texto($DESCRIPTION,0,115,1,0,$arialNarrow,$black,6.5,0,0);
                 else
                     texto($DESCRIPTION,0,115,1,0,$arialNarrow,$black,9,0,0);
             else
                 texto($DESCRIPTION,0,115,1,0,$arialNarrow,$black,12,0,0);
        else
            texto($DESCRIPTION,0,115,1,0,$arial,$black,14,0,0);
        
        if (strlen($COLOR)>10)
             if (strlen($COLOR)>18)
                 if (strlen($COLOR)>30)
                    texto($COLOR,0,155,1,0,$arialNarrow,$black,6.5,0,0);
                 else
                     texto($COLOR,0,155,1,0,$arialNarrow,$black,9,0,0);
             else
                 texto($COLOR,0,155,1,0,$arialNarrow,$black,12,0,0);
        else
            texto($COLOR,0,155,1,0,$arial,$black,14,0,0);
        
        texto($SIZE,0,195,1,0,$arial,$black,14,0,0);
        
        texto($SEASON,0,235,1,0,$arial,$black,14,0,0);
        
       require_once('../includes/footer.php');
    }
?>
