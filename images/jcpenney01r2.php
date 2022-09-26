<?php                      //   1       2       3       4      5     6     7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','LOT','SUPP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BURGANDY');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'JBWRD-1317');
        $UPC = asignar(4,'845550818497');
        $PRICE = asignar(5,'26.00');
        $LOT = asignar(6,'155');
        $SUPP = asignar(7,'13655-6');
        
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
        texto('Hybrid Apparel',0,55,1,0,$arial,$black,12,0,0);
        
        texto('Size:',20,88,0,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,20,110,0,0,$arialBold,$black,20,0,0);
        
        texto($STYLE,20,127,0,0,$arial,$black,8,0,0);
        
        texto('LOT # ',20,140,0,0,$arialBold,$black,10,0,0);
        
        texto($LOT,60,140,0,0,$arialBold,$black,10,0,0);
                
        texto($COLOR,0,153,2,5,$arialBold,$black,9.5,0,0);
        
        imageline($img,0,155,168,155,$black);
        imageline($img,0,156,168,156,$black);
        imageline($img,0,157,168,157,$black);
        
        texto('0006-E',25,169,0,0,$arial,$black,6,0,0);
        
        texto('SUPP.',95,169,0,0,$arial,$black,6,0,0);
        
        texto($SUPP,120,169,0,0,$arial,$black,6,0,0);
        
        texto(formatizarTexto('1   23456  14545   1',$UPC),0,235,1,0,$arial,$black,9.5,0,0);
        
        perforacion();
        
        texto(quitarDecimales($PRICE),0,285,1,0,$arialBold,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,155,1.2,62,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
