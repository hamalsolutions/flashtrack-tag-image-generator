<?php                     //    1 
    $correctos = array('QTY','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'885347133761');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
        // Creacion del Barcode
        setAsSticker(10);
        
        barcode($UPC,15,10,1.4,70,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
