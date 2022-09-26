<?php                       //   1       2    3    
    $correctos = array('QTY','STYLE','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1245668');
        $DEPT = asignar(2,'076');
        $PRICE = asignar(3,'9999.00');
        
        // Creacion del formato
        formato(100,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('nordstrom_2010.ttf');
        
        // Introducimos los datos
        texto('N',5,17,0,0,$logo,$black,11.5,0,0);
        texto('rack',72,15,0,0,$arial,$black,10,0,0);
        
        texto($DEPT,7,37,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($STYLE,0,50,2,7,$arialNarrow,$black,9.5,0,0);
        
        texto($PRICE,0,90,1,0,$arialNarrow,$black,11,0,1);
        
        
        require_once('../includes/footer.php');
    }
?>
