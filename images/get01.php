<?php                     //   1       2           3        4    
    $correctos = array('QTY','COLOR','SIZE','DESCRIPTION','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BURNT ORANGE');
        $SIZE = asignar(2,'XS');
        $DESCRIPTION = asignar(3,'50096BW');
        $UPC = asignar(4,'794511710267');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
                    
        texto($DESCRIPTION,9,42,0,5,$arial,$black,7,0,0);
        
        if ( strlen($COLOR) < 15)
            texto($COLOR,0,42,2,5,$arial,$black,7,0,0);
        else
            textoParrafo2($COLOR,65,35,$arial,$black,7,0,15,10);
            //texto($COLOR,0,42,2,5,$arialNarrow,$black,6,0,0);
        
        texto($SIZE,0,195,2,10,$arialBold,$black,15,0,0);
        
         // Creacion del Barcode
        barcode($UPC,10,45,1.1,110,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
