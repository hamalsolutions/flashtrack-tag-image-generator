<?php                    //    1                2       3        4      5      6      7    
    $correctos = array('QTY','DELIVERY CODE','EN COLOR','FR COLOUR','STYLE','SIZE','UPC','RETAIL');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DELIVERY = asignar(1,'DEL# F/A 14- P9');
        $COLOR = asignar(2,'BLACK');
        $COLOUR = asignar(3,'NOIR');
        $STYLE = asignar(4,'GTA032A');
        $SIZE = asignar(5,'XS/TP');
        $UPC = asignar(6,'123456789012');
        $PRICE = asignar(7,'49.00');
                
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        agujero(84, 25);
        // Introducimos los datos
        
        texto($DELIVERY,10,55,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($COLOR.'/'.$COLOUR,10,65,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($STYLE,10,75,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($SIZE,0,197,1,0,$arialBold,$black,18,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,70,1.2,85,'UPC');
        
        barcodeTexto(3,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
