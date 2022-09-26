<?php                     //   1       2       3      4      5        6      7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','VENDOR','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'IVORY');
        $SIZE = asignar(2,'LARGE');
        $STYLE = asignar(3,'TH4575');
        $UPC = asignar(4,'846606002006');
        $PRICE = asignar(5,'40.00');
        $VENDOR = asignar(6,'147835');
        $DEPT = asignar(7,'698');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $timesBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        
        texto('VON MAUR',0,52,1,0,$timesBold,$black,14,0,0);
        
        texto($STYLE,0,73,2,12,$arial,$black,8,0,0);
        texto('STYLE',105,85,0,0,$arial,$black,7,0,0);
        
        texto($DEPT,0,73,3,100,$arial,$black,8,0,0);
        texto('DEPT.',12,85,0,0,$arial,$black,7,0,0);
        
        texto($VENDOR,0,100,1,0,$arial,$black,8,0,0);
        texto('VENDOR',0,109,1,0,$arial,$black,7,0,0);
        
        texto('Color - '.$COLOR,0,125,1,0,$arial,$black,8,0,0);
        
        texto('Size',0,138,1,0,$arial,$black,8,0,0);
        texto($SIZE,0,152,1,0,$arialBold,$black,11,0,0);
        
        cajaRellena(1,155,147,25,$vicsColor,$vicsColor);
        
        texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,305,1,0,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,11,172,1.1,83,'UPC');
        
        barcodeTexto(3,0,4,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
