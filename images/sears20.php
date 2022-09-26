<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','SEASON','WEEK','SKU','SKU2','SKU3','DEPARTMENT','ITEM#','SIZE CODE','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SEASON = asignar(1,'F/4 4');
        $WEEK = asignar(2,'37');
        $SKU1 = asignar(3,'20');
        $SKU2 = asignar(4,'733');
        $SKU3 = asignar(5,'0596');
        $DEPARTMENT = asignar(6,'D40');
        $ITEM = asignar(7,'M88205');
        $SIZECODE = asignar(8,'014');
        $SIZE = asignar(9,'M');
        $UPC = asignar(10,'885347090125');
        $PRICE = asignar(11,'40.00');
                
            // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $blue = color(0,94,184);
        $red = color(239,62,66);
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('SearsCanada_Logo.ttf');
        
        // Introducimos los datos
        
        texto('A',0,30,1,0,$logo,$blue,20,0,0);
        texto('C',0,30,1,0,$logo,$red,20,0,0);
        
        texto($SEASON,10,45,0,0,$arial,$black,8,0,0);
        texto($WEEK,0,45,2,10,$arial,$black,8,0,0);
        
        texto($SKU1.' '.$SKU2.' '.$SKU3,0,77,1,0,$arial,$black,8,0,0);
        
        texto($DEPARTMENT.' '.$ITEM.' '.$SIZECODE,0,150,1,0,$arial,$black,8,0,0);
        
        texto('SIZE',10,170,0,0,$arialBold,$black,8,0,0);
        texto($SIZE,0,170,2,10,$arialBold,$black,8,0,0);
        
        texto('GRANDEUR',10,180,0,0,$arial,$black,6.5,0,0);
        
        texto($PRICE,0,215,1,0,$arial,$black,12.5,0,1);
        
        // Creacion del Barcode
        barcode($UPC,6,85,1,50,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
