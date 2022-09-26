<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','COLOR','SEASON','STYLE','SIZE','FIXTURE','UPC','PRICE','FINELINE','DESCRIPTION','LOCATION','DEPT','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'APPLE RED');
        $SEASON = asignar(2,'01-13');
        $STYLE = asignar(3,'AGX1012EAH020');
        $SIZE = asignar(4,'XL/XG (14/16)');
        $FIXTURE = asignar(5,'30');
        $UPC = asignar(6,'716068367923');
        $PRICE = asignar(7,'6.97');
        $FINELINE = asignar(8,'0193');
        $DESCRIPTION = asignar(9,'APPLE RAVEN');
        $LOCATION = asignar(10,'TEE WALL');
        $DEPT = asignar(11,'33');
        $SUB= asignar(12,'00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $white= color(255,255,255);
        $darkBlue = color(25, 69, 178);
        $pink = color(229, 109, 177);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
                
        agujero(75, 25);
                
        cajaVacia(6, 62, 137, 31, $darkBlue);
        texto('SIZE',10,72,0,0,$arial,$darkBlue,6,0,0);
        
        cajaRellena(25, 187, 100, 18, $pink, $white);
        
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
        
        texto($DESCRIPTION,0,107,1,0,$arialBold,$black,8,0,0);
        
        texto($FINELINE,texto($SUB,texto($DEPT,10,122,0,65,$arial,$black,8,0,0)-6,122,0,45,$arial,$black,8,0,0)-6,122,0,15,$arial,$black,8,0,0);
        
        texto($SEASON,10,132,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,122,2,5,$arial,$black,7,0,0);
        
        texto($STYLE,0,132,2,5,$arial,$black,7,0,0);
        
        texto($LOCATION.' '.$FIXTURE,0,200,1,0,$arialBold,$black,8,0,0);
        
        texto('Distributed by Wal-Mart Stores, Inc.',0,215,1,0,$arial,$black,6,0,0);
        texto('Bentonville, AR 72716',0,222,1,0,$arial,$black,6,0,0);
        texto('walmart.com',0,229,1,0,$arial,$black,6,0,0);
        
        perforacion(150, 275, 237);        
        
        texto($PRICE,0,265,1,0,$arialBold,$black,16.5,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,125,1.1,48,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>