<?php                       //   1       2      3        4
    $correctos = array('QTY','STYLE','DEPT','PRICE-H','PRICE-L');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1245668');
        $DEPT = asignar(2,'076');
        $PRICE_H = asignar(3,'9999.00');
        $PRICE_L = asignar(4,'8888.00');
        
        // Creacion del formato
        formato(100,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBoldSlash = fuente('Arial_Narrow_Slash.ttf');
        $logo = fuente('nordstrom_2010.ttf');
        
        // Introducimos los datos
        texto('N',5,17,0,0,$logo,$black,11.5,0,0);
        texto('rack',72,15,0,0,$arial,$black,10,0,0);
        
        texto($DEPT,10,35,0,0,$arialNarrow,$black,8.5,0,0);
        
        texto($STYLE,0,42,2,7,$arialNarrow,$black,9.5,0,0);
        
        texto('COMPARE AT',0,60,1,0,$arialNarrow,$black,8,0,0);
        
        texto($PRICE_H,0,75,1,0,$arialBoldSlash,$black,11,0,1);
        
        texto($PRICE_L,0,90,1,0,$arialNarrow,$black,11,0,1);
        
        
        require_once('../includes/footer.php');
    }
?>
