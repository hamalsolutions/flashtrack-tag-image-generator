<?php                      //  1      2      3       
    $correctos = array('QTY','SIZE','STYLE','UPC','PRICE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'4');
        $STYLE = asignar(2,'LM7000P672');
        $UPC = asignar(3,'791666631447');
        $PRICE = asignar(4,'59.00');
        $COLOR = asignar(5,'WHT');
        
            // Creacion del formato
        formato(133,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
                
        texto('STYLE',7,100,0,0,$arial,$black,7,0,0);
        texto($STYLE,7,113,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',0,100,2,5,$arial,$black,7,0,0);
        texto($COLOR,0,113,2,5,$arial,$black,7,0,0);
        
        texto('SIZE',0,130,1,0,$arial,$black,7,0,0);
        texto($SIZE,0,143,1,0,$arial,$black,7,0,0);
        
        perforacion(133, 300, 262);
        
        texto($PRICE,0,292,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,10,150,1,49,'UPC');
        
        barcodeTexto(1.5,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
