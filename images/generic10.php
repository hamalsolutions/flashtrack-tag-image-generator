<?php                     //    1 
    $correctos = array('QTY','SIZE','STYLE NAME','DESCRIPTION','COLOR','COLLECTION NAME','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'NB');
        $STYLENAME = asignar(2,'FW15-001-O');
        $DESCRIPTION = asignar(3,'CAP');
        $COLOR = asignar(4,'CORAL-PINK');
        $COLLECTION = asignar(5,'COASTAL COLLECTION');
        $UPC = asignar(6,'885347133761');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        texto('Size',10,20,0,0,$arialNarrowBold,$black,9,0,0);
        texto($SIZE,12,30,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($STYLENAME,0,20,2,10,$arialNarrowBold,$black,8.5,0,0);
        
        texto($DESCRIPTION,0,45,1,0,$arialNarrowBold,$black,8.5,0,0);
        
        texto($COLOR,0,55,1,0,$arialNarrowBold,$black,8.5,0,0);
        
        texto($COLLECTION,0,65,1,0,$arialNarrowBold,$black,8.5,0,0);
        
        // Creacion del Barcode
        setAsSticker(10);
        
        barcode($UPC,12,63,1.1,70,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
