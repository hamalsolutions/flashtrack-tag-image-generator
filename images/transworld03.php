<?php                      //      1          2     3
    $correctos = array('QTY','DESCRIPTION','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'T-Edward Cullen');
        $UPC = asignar(2,'123456789128');
                       
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION.'-PPK',0,20,1,0,$arialBold,$black,10,0,0);
        
        texto('PPK',0,95,1,0,$arialBold,$black,11,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,42,25,1,45,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
