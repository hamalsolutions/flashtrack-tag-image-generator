<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','SIZE','STYLE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $STYLE = asignar(2,'6561344I');
        $UPC = asignar(3,'829268997590');
        $PRICE = asignar(4,'24.99');
        $DEPT = asignar(5,'230');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        texto('Beall\'s',60,50,0,0,$timesNewRomanBold,$black,12,0,0);
        
        texto('Style',15,72,0,0,$arial,$black,9,0,0);
        texto($STYLE,55,72,0,0,$tahomaBold,$black,9,0,0);
        
        texto('Dept',15,91,0,0,$arial,$black,9,0,0);
        texto($DEPT,55,91,0,0,$tahomaBold,$black,9,0,0);
        
        texto('SIZE: '.$SIZE,0,230,1,0,$arial,$black,9,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - - - - - - --',0,262,1,0,$arial,$black,7,0,0);
        
        texto('MANUFACTURES',5,274,0,0,$arial,$black,6,0,0);
        texto('SUGGESTED',5,281,0,0,$arial,$black,6,0,0);
        texto('RETAIL',5,289,0,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,282,2,20,$arialBold,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,94,1.2,100,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
