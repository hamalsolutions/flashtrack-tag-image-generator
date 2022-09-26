<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','PO#');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLK');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'6561344I');
        $UPC = asignar(4,'829268997590');
        $PRICE = asignar(5,'24.99');
        $DEPT = asignar(6,'230');
        $PO = asignar(7,'123456');
        
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
        texto('Beall\'s',60,55,0,0,$timesNewRomanBold,$black,12,0,0);
        
        texto('PO#: '.$PO,0,74,1,0,$arial,$black,9,0,0);
        
        texto($STYLE,0,92,1,0,$arialBold,$black,11,0,0);
        
        texto('DEPT#: '.$DEPT,15,111,0,0,$arial,$black,9,0,0);
        
        texto('COLOR: '.$COLOR,15,129,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,234,1,0,$arialBold,$black,14,0,0);
        
        texto($PRICE,0,278,1,0,$arial,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,114,1.2,80,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
