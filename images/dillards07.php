<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'C1R1082');
        $COLOR = asignar(2,'CHARCOAL/CAMEL');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'64.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto('Vendor Style#',10,60,0,0,$arial,$black,8,0,0);
        texto($STYLE,75,60,0,0,$arial,$black,8,0,0);
        
        texto('Vendor Color',10,77,0,0,$arial,$black,8,0,0);
        parrafo($COLOR, 72, 77, 0, 0, $arial, $black, 8, 0, 14, 12);
        
        texto('Vendor Size',10,105,0,0,$arial,$black,8,0,0);
        texto($SIZE,70,105,0,0,$arial,$black,8,0,0);
        
        perforacion();
        
        texto($PRICE,0,275,1,0,$arialBold,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,120,1.2,90,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
