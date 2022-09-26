<?php                      //      1          2     3
    $correctos = array('QTY','SIZE','DESCRIPTION','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $SIZE = asignar(1,'Small');
        $DESCRIPTION = asignar(2,'T-DZB Collage');
        $UPC = asignar(3,'123456789128');
                       
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos

        parrafo($DESCRIPTION,0,27,1,0,$arialBold,$black,8,0,24,10);
        
        texto($SIZE,0,130,1,0,$arialBold,$black,11,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,27,35,1.2,65,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
