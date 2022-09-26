<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'12345');
        $UPC = asignar(4,'000123456784');
        $PRICE = asignar(5,'12.00');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $red = color(255,0,0);
        $vicsColor = colorVic($SIZE);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tradeGothic = fuente('TradeGotBolConTwe.ttf');
        $logo = fuente('vicsLogos.ttf');
        
        // Introducimos los datos
        
        texto('Z',0,75,1,0,$logo,$black,65,0,0);
        
        imagefilledellipse($img,75,30,15,15,$transparent);
        imageellipse($img,75,30,15,15,$gray);
        
        texto($STYLE,9,125,0,0,$tradeGothic,$black,8,0,0);
        
        texto($COLOR,0,125,2,5,$tradeGothic,$black,8,0,0);
        
        cajaRellena(1,235,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,257,1,0,$arialBold,$black,19,0,0);
        
        perforacion(150, 400, 360);
        
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
            
        $start = texto($PRICE,0,390,1,0,$arial,$black,14,0,0);
        
        if ($PRICE) {
            texto('$',$start-6,385,0,0,$arial,$black,10,0,0);
        }
        
         // Creacion del Barcode
        barcode($UPC,11,123,1.1,90,'UPC');
        
        barcodeTexto(3,0,-2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
