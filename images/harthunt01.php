<?php                      //   1       2     3     4         5          6
    $correctos = array('QTY','COLOR','SIZE','SKU','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'XXL');
        $SKU = asignar(3,'HT112026');
        $UPC = asignar(4,'884876015647');
        $DESCRIPTION = asignar(5,'COLOR SHIFT');
        $PRICE = asignar(6,'28.00');
        
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('hnhLogo.ttf');
        
        // Introducimos los datos
        texto('0',0,130,1,0,$logo,$black,85,0,0);
        
        texto($DESCRIPTION,0,295,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,13,310,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,310,2,10,$arial,$black,8,0,0);
        
        texto($SKU,0,325,1,0,$arial,$black,8,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,350,1,0,$arialBold,$black,10,0,0);
        
        texto('MSRP '.dollarSign($PRICE),0,380,1,0,$arial,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,160,1,90,'UPC');
        
        barcodeTexto(2,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
