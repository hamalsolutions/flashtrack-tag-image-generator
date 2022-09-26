<?php                      //  1     2      3       4       5         6     7   
    $correctos = array('QTY','CAT','SKU','SIZE','COLOR','SUPPLIER','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $CAT = asignar(1,'422-2574');
        $SKU = asignar(2,'0091');
        $SIZE = asignar(3,'S (8)');
        $COLOR = asignar(4,'BLACK');
        $SUPPLIER = asignar(5,'13655-6');
        $STYLE = asignar(6,'1234-ABC');
        $UPC = asignar(7,'123456789104');
        
            // Creacion del formato
        formato(150,188,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($CAT,0,38,1,0,$arialBold,$black,20,0,0);
        
        texto($SKU,0,68,1,0,$arialBold,$black,20,0,0);
        
        imageline($img,10,75,140,75,$black);
        imageline($img,10,76,140,76,$black);
        
        texto($SIZE,12,92,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,92,2,5,$arial,$black,8,0,0);
        
        texto($SUPPLIER,0,102,1,0,$arial,$black,8,0,0);
        
        texto('Style# '.$STYLE,0,115,1,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,12,108,1.1,46,'UPC');
        
        barcodeTexto(2,-1,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
