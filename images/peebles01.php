<?php                      //   1      2       3       4      5      6      7
    $correctos = array('QTY','COLOR','SIZE','CLASS','STYLE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHARCOAL HEATER');
        $SIZE = asignar(2,'XL');
        $CLASS = asignar(3,'6840');
        $STYLE = asignar(4,'1YBTAT138TF');
        $UPC = asignar(5,'645423392303');
        $PRICE = asignar(6,'29.99');
        $DEPT = asignar(7,'0722');
        
        // Creacion del formato
        formato(125,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('Peebles',0,60,1,0,$arial,$black,17,0,0);
        
        texto('DPT',10,81,0,0,$arial,$black,8,0,0);
        texto($DEPT,35,81,0,0,$arial,$black,8,0,0);
        
        texto('CL '.$CLASS,0,81,2,7,$arial,$black,8,0,0);
        
        texto($STYLE,0,120,1,0,$arial,$black,9,0,0);
        
        texto('COLOR',5,220,0,0,$arial,$black,6.5,0,0);
        texto($COLOR,40,220,0,0,$arial,$black,6,0,0);
        
        texto('SIZE',5,235,0,0,$arial,$black,7.5,0,0);
        texto($SIZE,35,235,0,0,$arial,$black,7.5,0,0);
        
        texto($PRICE,0,270,1,0,$arialBold,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,5,125,1,73,'UPC');
        
        barcodeTexto(2,-1,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
