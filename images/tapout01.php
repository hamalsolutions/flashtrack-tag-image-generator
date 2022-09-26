<?php                    //    1        2     3     4       5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COLOR = asignar(1,'RED HEATHER');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'WRD-515');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'17.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        
            // Introducimos los datos
        
        texto($STYLE,20,98,0,0,$tahomaBold,$black,12,0,0);
        
        texto('COLOR',20,120,0,0,$tahomaBold,$black,9.5,0,0);
        
        if (strlen($COLOR) < 11)
            texto($COLOR,0,120,2,15,$tahomaBold,$black,9,0,0);
        else
            texto($COLOR,0,120,2,5,$tahomaBold,$black,8,0,0);
        
        imageline($img,0,125,168,125,$black);
        
        texto('SIZE',20,232,0,0,$tahomaBold,$black,9,0,0);
        texto($SIZE,60,232,0,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,28,145,1,55,'UPC');
        
        barcodeTexto(3,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
