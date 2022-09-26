<?php                      //   1       2      3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BURGANDY');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'JBWRD-1317');
        $UPC = asignar(4,'845550818497');
        $PRICE = asignar(5,'26.00');
        
        
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
        
        texto('SIZE',20,55,0,0,$arialBold,$black,9,0,0);
        
        texto($SIZE,20,80,0,0,$arialBold,$black,20,0,0);
        
        texto('STYLE',0,115,1,0,$arial,$black,8,0,0);
        texto($STYLE,0,130,1,0,$arialBold,$black,9,0,0);
        
        texto($COLOR,0,153,1,0,$arialBold,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,135,1.2,90,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
