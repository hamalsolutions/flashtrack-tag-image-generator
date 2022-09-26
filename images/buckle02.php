<?php                    //    1      2      3
    $correctos = array('QTY','UPC','STYLE','SIZE','COLOR','STYLE NAME','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'123456789012');
        $STYLE = asignar(2,'STYLE #');
        $SIZE = asignar(3,'SIZE');
        $COLOR = asignar(4,'COLORWAY');
        $STYLENAME = asignar(5,'STYLE NAME');
        $PRICE = asignar(6,'9.99');
        
            // Creacion del formato 
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        
        texto($STYLE,5,15,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,15,2,5,$arial,$black,8,0,0);
        
        texto($STYLENAME,0,27,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,40,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,97,1,0,$arial,$black,8,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,45,1,30,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
