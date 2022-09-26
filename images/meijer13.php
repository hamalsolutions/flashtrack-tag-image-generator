<?php                     //      1   2     3     4       5
    $correctos = array('QTY','NAME','KEY','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $NAME = asignar(1,'STRAIGHT LEG BLK');
        $KEY = asignar(2,'50');
        $UPC = asignar(3,'001234567895');
        $SIZE = asignar(4,'15');
        $RETAIL = asignar(5,'$36.00');
        
        // Creacion del formato
        formato(125,225,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('meijer',80,30,0,0,$arialBold,$black,10,0,0);
        
        texto($NAME,0,50,1,0,$arial,$black,7,0,0);
        
        texto($KEY,0,80,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,172,1,0,$arial,$black,12,0,0);
        
        texto($RETAIL,0,210,1,0,$arialBold,$black,12,0,1);
        
            // Creacion del Barcode
        barcode($UPC,5,88,1,45,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
