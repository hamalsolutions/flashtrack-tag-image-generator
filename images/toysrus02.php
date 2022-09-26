<?php                       //  1     2
    $correctos = array('QTY','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'XLARGE');
        $UPC = asignar(2,'885347141421');
        
        // Creacion del formato
        formato(300,150,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('SIZE',20,85,0,0,$arial,$black,7,90,0);
        texto($SIZE,50,85,0,0,$arialBold,$black,9,90,0);
        
        // Creacion del Barcode
        barcode($UPC,100,75,1.3,78,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
