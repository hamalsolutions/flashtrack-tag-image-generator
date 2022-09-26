<?php                     //   1       2       3      4     5       6       7      8    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'12');
        $STYLE = asignar(3,'12345');
        $UPC = asignar(4,'761625071249');
        $PRICE = asignar(5,'25.99');
        $DEPT = asignar(6,'159');
        $CLASS = asignar(7,'10');
        $SUB = asignar(8,'16');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tradeGothic = fuente('tradegothicltstdbold.ttf');
        $logo = fuente('vicsLogos.ttf');
        
        // Introducimos los datos
        
        texto('Z',0,75,1,0,$logo,$black,65,0,0);
        
        imagefilledellipse($img,75,30,15,15,$transparent);
        imageellipse($img,75,30,15,15,$gray);
        
        texto('KOHL\'S',0,110,1,0,$tradeGothic,$black,10,0,0);
        
        texto($STYLE,5,123,0,0,$tradeGothic,$black,strlen($COLOR)>12?7:8,0,0);
        
        texto($COLOR,0,123,2,2,$tradeGothic,$black,strlen($COLOR)>12?7:8,0,0);
        
        texto($DEPT,0,135,3,50,$tradeGothic,$black,9,0,0);
        
        texto($CLASS,0,135,1,0,$tradeGothic,$black,9,0,0);
        
        texto($SUB,0,135,3,-50,$tradeGothic,$black,9,0,0);

        cajaRellena(1,235,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,257,1,0,$tradeGothic,$black,18,0,0);
        
        perforacion(150, 400, 369);
        
        texto('MSRP',5,392,0,0,$tradeGothic,$black,18,0,0);
        texto($PRICE,0,392,2,5,$tradeGothic,$black,18,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,11,125,1.1,87,'UPC');
        
        barcodeTexto(2,-1,-5,6,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
