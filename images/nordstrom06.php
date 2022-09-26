<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1052BUR');
        $COLOR = asignar(2,'Black');
        $SIZE = asignar(3,'O/S');
        $UPC = asignar(4,'846169005360');
        $PRICE = asignar(5,'88.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('STYLE',15,60,0,0,$arial,$black,8,0,0);
        texto($STYLE,65,60,0,0,$arial,$black,8,0,0);
        
        texto('COLOR',15,80,0,0,$arial,$black,8,0,0);
        texto($COLOR,65,80,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',15,100,0,0,$arial,$black,8,0,0);
        texto($SIZE,65,100,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,247,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,17,110,1,60,'UPC');
        
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
