<?php                     //     1       2      3      4         5
    $correctos = array('QTY','VENDOR','VENDOR STYLE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $VENDOR = asignar(1,'79151');
        $VENDORSTYLE = asignar(2,'70986041');
        $UPC = asignar(3,'123456789012');
        $DESCRIPTION = asignar(4,'Description');
        
            // Creacion del formato
        formato(170,300,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        
               // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        
        agujero(87, 25);
        
        texto('VENDOR ID        '.$VENDOR,0,75,1,0,$arialNarrowBold,$black,8,0,0);
        
        texto($VENDORSTYLE,0,120,1,0,$arialNarrowBold,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,15,115,1.2,70,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        texto($DESCRIPTION,0,230,1,0,$arialNarrow,$black,7,0,0);
        
        perforacion();
        
        require_once('../includes/footer.php');
    }
?>