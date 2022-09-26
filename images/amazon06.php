<?php                     //    1 
    $correctos = array('QTY','UPC','SIZE','COLOR','STYLE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'885347133761');
        $SIZE = asignar(2,'X-Large');
        $COLOR = asignar(3,'emerald');
        $STYLE = asignar(4,'FM13-1040');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,15,65,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,15,80,0,0,$arial,$black,9,0,0);
        
        texto('SIZE',15,95,0,0,$arial,$black,9,0,0);
        texto($SIZE,45,95,0,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        setAsSticker(10);
        
        barcode($UPC,15,5,1.4,35,'UPC');
        
        barcodeTexto(1,0,0,2,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
