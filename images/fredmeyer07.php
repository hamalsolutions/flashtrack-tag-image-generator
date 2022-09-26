<?php                    //        1         2       3       4      5     6      7
    $correctos = array('QTY','DESCRIPTION','SIZE','STYLE','UPC','PRICE','SKU','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'HELLO MY NAME IS AWESOME');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'BLFIDO');
        $UPC = asignar(4,'845550607190');
        $PRICE = asignar(5,'24.00');
        $SKU = asignar(6,'12345679');
        $CLASS = asignar(7,'560');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $ocrb = fuente('OCR-B_SB.ttf');
        $arialNarrowItalicBold = fuente('arialnbi.ttf');
                    
        // Introducimos los datos
        texto('Fred Meyer',0,53,1,0,$arialNarrowItalicBold,$black,15,0,0);
        
        texto($DESCRIPTION,0,67,1,0,$arial,$black,7,0,0);
        
        texto($STYLE,0,80,1,0,$arial,$black,7,0,0);
        
        texto($CLASS,105,113,0,0,$arial,$black,8,0,0);
        
        texto('CL',135,113,0,0,$arial,$black,8,0,0);
        
        texto('SKU',127,215,0,0,$arial,$black,6.5,0,0);
        
        texto($SKU,0,227,1,0,$arial,$black,8,0,0);
        
        texto('SIZE',15,241,0,0,$arial,$black,6,0,0);
        
        texto($SIZE,0,255,3,70,$arialBold,$black,13,0,0);
        
        texto(formatizarTexto('885347     085992',$UPC),0,192,1,0,$ocrb,$black,9,0,0);
        
        texto($PRICE,0,280,2,30,$arial,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,89,1.3,89,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
