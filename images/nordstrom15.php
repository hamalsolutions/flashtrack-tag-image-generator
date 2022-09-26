<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Navy');
        $SIZE = asignar(2,'29');
        $STYLE = asignar(3,'TR1059');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'78.00');
        $DESCRIPTION = asignar(6,'Day Tripper');
                       
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto($DESCRIPTION,0,55,1,0,$arial,$black,9,0,0);
        
        texto($STYLE,0,73,1,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,91,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,210,1,0,$arialBold,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,14,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,15,85,1.2,90,'UPC');
        
        barcodeTexto(2,0,1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
