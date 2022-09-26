<?php                    //    1        2     3     4       5       6
    $correctos = array('QTY','COLOR','SIZE','SKU','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'SMALL');
        $SKU = asignar(3,'001658323');
        $UPC = asignar(4,'845550818497');
        $PRICE = asignar(5,'14.99');
        $DESCRIPTION = asignar(6,'LAKE KING/WHITE/SMALL');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        $UPC = substr($UPC,0,13);
        
        texto($UPC.'-'.$SKU,0,87,1,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,160,1,0,$arial,$black,13,0,0);
        
        texto($DESCRIPTION,0,180,1,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,200,1,0,$arial,$black,8,0,0);
        
        texto('BASS PRO SHOPS PRICE',20,225,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,275,1,0,$arialBold,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,75,1.2,51,'EAN');
        
        require_once('../includes/footer.php');
    }
?>