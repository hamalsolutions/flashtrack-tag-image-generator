<?php                     //         1          2         3        4       5      6    
    $correctos = array('QTY','COUNTRY','COLOR','UPC','DESCRIPTION','PRICE','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COUNTRY = asignar(1,'CHINA');
        $COLOR = asignar(2,'BLACK');
        $UPC = asignar(3,'410007275965');
        $DESCRIPTION = asignar(4,'BLACK/WHITE');
        $PRICE = asignar(5,'29.00');
        $SIZE = asignar(6,'S');
        
            // Creacion del formato
        formato(125,100,255,255,255);
        
            // Colores a usar
        $blue = color(0,0,255);
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arial = fuente('arial.ttf');
        $logo = fuente('CharmingCharlie_Logo.ttf');
        
            // Contenido del formato
        texto('C',0,22,1,0,$logo,$black,18,3,0);
        
        texto('MADE IN '.$COUNTRY,0,30,1,0,$arialNarrow,$black,7,0,0);
        
        texto($DESCRIPTION,10,70,0,0,$arialNarrow,$black,7,0,0);
        
        texto($COLOR,10,80,0,0,$arialNarrow,$black,7,0,0);
        
        texto('SIZE: '.$SIZE,10,90,0,0,$arialNarrow,$black,7,0,0);
        
        cajaVacia(77,75,37,15,$black);
        
        texto($PRICE,0,87,2,10,$arial,$black,7,0,1);
        
            // Creacion del Barcode
        barcode($UPC,5,33,1,20,'MSI');
        texto($UPC,0,62,1,0,$arialNarrow,$black,7,0,0);
        //barcodeTexto(1,0,0,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>