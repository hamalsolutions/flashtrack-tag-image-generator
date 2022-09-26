<?php                    //     1       2          3          4       5    6       7      8      9      10
    $correctos = array('QTY','DIV','SIZE','DESCRIPTION','STYLE','UPC','KSN','CATEGORY','ITEM#','SKU','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DIV = asignar(1,'016');
        $SIZE = asignar(2,'1X');
        $DESCRIPTION = asignar(3,'TIERED TANK');
        $STYLE = asignar(4,'9LA959951027F');
        $UPC = asignar(5,'084600023423');
        $KSN = asignar(6,'65198389-2');
        $CATEGORY = asignar(7,'PETITE');
        $ITEM = asignar(8,'M11840');
        $SKU = asignar(9,'049');
        $PRICE = asignar(10,'36.00');
        
            // Creacion del formato
        formato(275,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $times = fuente('times.ttf');
              
        // Introducimos los datos
        texto('www.volumecocomo.com',25,45,0,0,$arial,$black,10,0,0);
        
        texto('KSN#  '.$KSN,25,69,0,0,$arial,$black,10,0,0);
        
        texto($CATEGORY,25,83,0,0,$arial,$black,10,0,0);
        
        texto($DESCRIPTION,25,97,0,0,$arial,$black,10,0,0);
        
        texto('STYLE  '.$STYLE,25,111,0,0,$arial,$black,10,0,0);
        
        $DIV = str_replace('D','',$DIV);
        texto('DIV#  '.$DIV,25,125,0,0,$arial,$black,10,0,0);
        
        $ITEM = str_replace('M','',$ITEM);
        texto('ITEM#  M'.$ITEM,25,139,0,0,$arial,$black,10,0,0);
        
        texto('SKU#  '.$SKU,25,153,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,140,2,28,$times,$black,28,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6    1 4 5 4 5 1',$UPC),0,225,1,0,$arial,$black,12,0,0);
        
        texto($PRICE,0,260,1,0,$arial,$black,22,0,1);
        
        // Creacion del Barcode
        barcode($UPC,17,85,1.9,124,'UPC');
        
        require_once('../includes/footer.php');
    }
?>