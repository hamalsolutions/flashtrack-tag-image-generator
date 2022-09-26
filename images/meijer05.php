<?php                      //  1          2         3     4      5
    $correctos = array('QTY','SIZE','DESCRIPTION','KEY','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'S');
        $DESCRIPTION = asignar(2,'MRKWH/Rose');
        $KEY = asignar(3,'250');
        $UPC = asignar(4,'884918271147');
        $PRICE = asignar(5,'16.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Meijer_Logo.ttf');
        
        // Introducimos los datos
        texto('M',110,55,0,0,$logo,$black,17,0,0);
        
        texto('SIZE',20,55,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,70,3,105,$arialBold,$black,11,0,0);
        
        texto($DESCRIPTION,10,105,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,146,2,20,$arialBold,$black,12,0,1);
        
        texto($KEY,10,163,0,0,$arial,$black,8,0,0);
                
        // Creacion del Barcode
        barcode($UPC,12,141,1.2,102,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
