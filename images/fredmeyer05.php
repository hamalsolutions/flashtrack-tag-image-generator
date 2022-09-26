<?php                    //    1        2      3  
    $correctos = array('QTY','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(3,'3034JA-471');
        $UPC = asignar(4,'881759010263');
        $PRICE = asignar(5,'58.00');
        
             // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBoldItalic = fuente('arialnbi.ttf');
        
        // Introducimos los datos
        
        texto('Fred Meyer',0,55,1,0,$arialNarrowBoldItalic,$black,14,0,0);
        
        texto('STYLE',0,87,1,0,$arial,$black,8.5,0,0);
        texto($STYLE,0,107,1,0,$arial,$black,12,0,0);
                       
        texto($PRICE,0,281,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,27,148,1,73,'UPC');
        
        barcodeTexto(2,-1,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
