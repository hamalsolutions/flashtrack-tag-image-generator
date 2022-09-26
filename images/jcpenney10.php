<?php                      //   1       2       3       4      5       6
    $correctos = array('QTY','COLOR','SIZE-W','STYLE','UPC','PRICE','SIZE-N');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BURGANDY');
        $SIZE_W = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'JBWRD-1317');
        $UPC = asignar(4,'845550818497');
        $PRICE = asignar(5,'26.00');
        $SIZE_N = asignar(6,'10 1/2-12 1/2');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        texto('Size',20,70,0,0,$arial,$black,9,0,0);
        
        texto($SIZE_W,10,85,0,0,$arialNarrowBold,$black,12,0,0);
        
        texto('('.$SIZE_N.')',10,105,0,0,$arialNarrowBold,$black,12,0,0);
        
        texto($STYLE,15,137,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,137,2,7,$arial,$black,7,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,18,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,14,134,1.2,79,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>