<?php                    //    1      2      3         4          5      6
    $correctos = array('QTY','SIZE','SKU','PRICE','DESCRIPTION','DEPT','DATE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SMALL');
        $SKU = asignar(2,'836751006660');
        $PRICE = asignar(3,'10.00');
        $DESCRIPTION = asignar(4,'SINISTER MENS T-SHIRT');
        $DEPT = asignar(5,'20');
        $DATE = asignar(6,'04370');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('Dept. '.$DEPT,10,42,0,0,$arial,$black,9,0,0);
        
        texto('SKU',15,63,0,0,$arialBold,$black,10,0,0);
        texto($SKU,55,63,0,0,$arialBold,$black,10,0,0);
        
        texto($DESCRIPTION,0,79,1,0,$arial,$black,8,0,0);
        
        texto($DATE,0,95,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,238,1,0,$arialBold,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - - - - - - --',0,262,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,287,1,0,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($SKU,13,90,1.2,105,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>