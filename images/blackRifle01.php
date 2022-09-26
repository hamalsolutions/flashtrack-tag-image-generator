<?php                      //  1     2
    $correctos = array('QTY','UPC','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $UPC = asignar(1,'810071973475');
        $SKU = asignar(2,'10-241-022-025');
                       
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(12);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto($SKU,0,91,1,0,$arial,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,20,8,1.3,52,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>