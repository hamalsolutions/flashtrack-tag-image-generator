<?php                    //    1      2      3        4      5
    $correctos = array('QTY','UPC','STYLE','COLOR','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'123456789012');
        $STYLE = asignar(2,'KBF1733054');
        $COLOR = asignar(3,'SILVER/AQUA');
        $SIZE = asignar(4,'12');
        $PRICE = asignar(5,'10.00');
        
            // Creacion del formato 
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        
        texto($STYLE,0,15,1,0,$arial,$black,8,0,0);
        texto($COLOR,0,26,1,0,$arial,$black,8,0,0);
        texto($SIZE,0,36,1,0,$arial,$black,8,0,0);
        texto($PRICE,0,95,1,0,$arial,$black,8,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,39,1,34,'UPC');
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
