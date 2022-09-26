<?php              //    1     2      3      4       5      6         7           8        9      10  
    $correctos = array('QTY','UPC','ITEM','COLOR','SIZE','STYLE','DESCRIPTION','SEASON','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'829268027907');
        $ITEM = asignar(2,'34002666');
        $COLOR = asignar(3,'HEATHER GREY');
        $SIZE = asignar(4,'M (7-9)');
        $STYLE = asignar(5,'PUJ24T748S');
        $DESCRIPTION = asignar(6,'STRIPE TANK');
        $SEASON = asignar(7,'02-2014');
        $PRICE = asignar(8,'9.88');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $white= color(255,255,255);
        $darkBlue = color(25, 69, 178);
        //$gray = color(138, 138, 138);
        $pink = color(252, 117, 142);
        //$transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
        agujero(75, 25);
                
        cajaVacia(6, 62, 137, 31, $darkBlue);
        texto('SIZE',10,72,0,0,$arial,$darkBlue,6,0,0);
        
        cajaRellena(25, 207, 100, 18, $pink, $white);
        
            // Introducimos los datos
        
        texto('1',15,60,0,0,$logo,$darkBlue,35,0,0);
        
        texto('2',104,60,0,0,$logo,$darkBlue,35,0,0);
        
        $sizeArray = explode('(', str_replace(' ', '', $SIZE));
        if (count($sizeArray)> 1) {
            texto($sizeArray[0],0,75,1,0,$arialBold,$black,10.5,0,0);
            texto('('.$sizeArray[1],0,89,1,0,$arialBold,$black,10.5,0,0);
        } else {
            texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
        }
        
        //texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
        
        texto($DESCRIPTION,0,107,1,0,$arial,$black,7,0,0);
        
        texto($ITEM,12,122,0,0,$arial,$black,7,0,0);
        texto($COLOR,0,122,2,10,$arial,$black,7,0,0);
        
        texto($STYLE,12,138,0,0,$arial,$black,7,0,0);
        texto($SEASON,0,138,2,10,$arial,$black,7,0,0);
        
        texto('JUNIOR',0,220,1,0,$arial,$black,8,0,0);
        
        texto('WM134567890-1201',0,238,1,0,$arial,$black,6,0,0);
        texto('Distributed by Wal-Mart Stores, Inc.',0,248,1,0,$arial,$black,6,0,0);
        texto('Bentonville, AR 72716',0,258,1,0,$arial,$black,6,0,0);
        texto('walmart.com',0,268,1,0,$arial,$black,6,0,0);
        
        perforacion(150, 300, 270);
        
        texto($PRICE,0,295,1,0,$arial,$black,16.5,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,130,1.1,58,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>