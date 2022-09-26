<?php                     //    1 
    $correctos = array('QTY','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'885347133761');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
        // Creacion del Barcode
        barcode($UPC,11,35,1.1,70,'UPC');
        
        barcodeTexto(2,0,0,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
