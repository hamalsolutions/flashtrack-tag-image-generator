<?php                    //    1       2       3      4      5    
    $correctos = array('QTY','SIZE','STYLE','COLOR','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SMALL');
        $STYLE = asignar(2,'BTAS2101');
        $COLOR = asignar(3,'Red');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'20.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(84, 25);
        
        texto($STYLE,10,37,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,37,2,10,$arial,$black,8,0,0);
        
        texto('SIZE',10,170,0,0,$arialBold,$black,8,0,0);
        texto($SIZE,40,175,0,0,$arialBold,$black,18,0,0);
        
        texto($PRICE,0,230,1,0,$arialBold,$black,17,0,1);
        
        perforacion();
        
        // Creacion del Barcode
        barcode($UPC,8,35,1.3,95,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
