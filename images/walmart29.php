<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','COLOR NAME','SEASON','COLOR','SIZE','FIXTURE','UPC','PRICE','FINELINE','DESCRIPTION','LOCATION','DEPT','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLORNAME = asignar(1,'COLOR NAME');
        $SEASON = asignar(2,'0203');
        $COLOR = asignar(3,'ITB');
        $SIZE = asignar(4,'2T');
        $FIXTURE = asignar(5,'1');
        $UPC = asignar(6,'716068367923');
        $PRICE = asignar(7,'5.88');
        $FINELINE = asignar(8,'6815');
        $DESCRIPTION = asignar(9,'DESCRIPTION');
        $LOCATION = asignar(10,'RACK');
        $DEPT = asignar(11,'26');
        $SUB= asignar(12,'00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $white= color(255,255,255);
        $darkBlue = color(25, 69, 178);
        $lightBlue = color(102, 153, 255);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
        imagefilledellipse($img,75,25,12,12,$transparent);
        imageellipse($img,75,25,12,12,$gray);
                
        cajaVacia(6, 62, 137, 31, $darkBlue);
        texto('SIZE',10,72,0,0,$arial,$darkBlue,6,0,0);
        
        cajaRellena(25, 187, 100, 18, $lightBlue, $white);
        
            // Introducimos los datos
        
        texto('1',15,60,0,0,$logo,$darkBlue,35,0,0);
        
        texto('2',104,60,0,0,$logo,$darkBlue,35,0,0);
        
        
        texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
        
        texto($DESCRIPTION.' - '.$COLORNAME,0,107,1,0,$arial,$black,7,0,0);
        
        
        texto($SEASON,22,122,0,0,$arial,$black,8,0,0);
        
        texto('/      /',84,122,0,0,$arial,$black,8,0,0);
        texto($DEPT,0,122,2,65,$arial,$black,8,0,0);
        texto($SUB,0,122,2,45,$arial,$black,8,0,0);
        texto($FINELINE,0,122,2,15,$arial,$black,8,0,0);
        
        texto($COLOR.' '.$LOCATION.' '.$FIXTURE,0,200,1,0,$arial,$black,8,0,0);
        
        texto('Distributed by Wal-Mart Stores, Inc.',0,215,1,0,$arial,$black,6,0,0);
        texto('Bentonville, AR 72716',0,222,1,0,$arial,$black,6,0,0);
        texto('walmart.com',0,229,1,0,$arial,$black,6,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,237,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,265,1,0,$arial,$black,16.5,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,115,1.1,58,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>