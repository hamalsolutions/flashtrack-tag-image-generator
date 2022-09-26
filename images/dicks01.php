<?php                  //       1       2     3      4
    $correctos = array('QTY','STYLE','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WBT422POM');
        $SIZE = asignar(2,'XS');
        $UPC = asignar(3,'840748108770');
        $PRICE = asignar(4,'42.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        agujero(85, 25);
        
        // Introducimos los datos
        texto($STYLE,0,65,1,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,0,95,1,0,$arialBold,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,280,1,0,$arialBold,$black,14,0,1);
        
            // Creacion del Barcode
        barcode($UPC,8,92,1.3,101,'UPC');
        
        barcodeTexto(2,0,-1,5,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
