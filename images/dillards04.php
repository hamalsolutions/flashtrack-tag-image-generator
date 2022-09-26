<?php                      //  1      2      3       
    $correctos = array('QTY','SIZE','STYLE','UPC','PRICE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'11');
        $STYLE = asignar(2,'123456789');
        $UPC = asignar(3,'791666631447');
        $PRICE = asignar(4,'89.00');
        $COLOR = asignar(5,'WHITE');
        
            // Creacion del formato
        formato(125,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $times = fuente('times.ttf');
        
        // Introducimos los datos
        texto('Dillard\'s',0,52,1,0,$times,$black,20,0,0);
        
        texto('STYLE# '.$STYLE,0,179,1,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,195,1,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,220,1,0,$arial,$black,17,0,0);
        
        texto('-- - - - - - - - - - - - - --',0,262,1,0,$arial,$black,10,0,0);
        
        texto('SUGGESTED RETAIL PRICE',0,268,1,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,292,1,0,$arial,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,70,1,79,'UPC');
        
        barcodeTexto(1.5,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
