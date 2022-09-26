<?php                      //   1      2      3      4     5           6 
    $correctos = array('QTY','COLOR','SIZE','SKU','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHT/NAVY');
        $SIZE = asignar(2,'SMALL');
        $SKU = asignar(3,'14-81370-3-00');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'9.99');
        $DESCRIPTION = asignar(6,'RINGER-TEE');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($COLOR,0,142,1,0,$arial,$black,9,0,0);
        
        texto($DESCRIPTION,0,159,1,0,$arial,$black,8.5,0,0);
        
        texto($SKU,0,192,1,0,$arial,$black,8.5,0,0);
        
        texto($SIZE,0,220,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,260,1,0,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,10,45,1.1,65,'UPC');
        
        barcodeTexto(4,0,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
