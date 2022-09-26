<?php                     //    1 
    $correctos = array('QTY','UPC','SIZE','COLOR','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'885347133761');
        $SIZE = asignar(2,'8');
        $COLOR = asignar(3,'851 BLACK');
        $DESCRIPTION = asignar(4,'RSQ M LONDON SKINNY');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto('Size:',10,20,0,0,$arial,$black,9.5,0,0);
        texto($SIZE,40,20,0,0,$arial,$black,9,0,0);
        
        texto('Color:',90,20,0,0,$arial,$black,9.5,0,0);
        texto($COLOR,130,20,0,0,$arial,$black,8.5,0,0);
        
        texto($DESCRIPTION,10,35,0,0,$arial,$black,8.5,0,0);
        
        // Creacion del Barcode
        setAsSticker(10);
        
        barcode($UPC,15,30,1.4,55,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
