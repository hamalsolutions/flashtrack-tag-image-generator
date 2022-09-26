<?php                    //    1       2       3            4      5      6
    $correctos = array('QTY','SIZE','STYLE','COLOR CODE','COLOR','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SMALL');
        $STYLE = asignar(2,'BTAS2101');
        $COLORCODE = asignar(3,'MII');
        $COLOR = asignar(4,'MIN/MIN');
        $UPC = asignar(5,'123456789128');
        $PRICE = asignar(6,'20.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
                
        agujero(84, 25);
        
        texto($STYLE,10,43,0,0,$arial,$black,8,0,0);
        
        texto($COLORCODE.' / '.$COLOR,0,43,2,10,$arial,$black,8,0,0);
        
        texto('SIZE',10,173,0,0,$arialBold,$black,8,0,0);
        texto($SIZE,40,180,0,0,$arialBold,$black,18,0,0);
        
        texto($PRICE,0,235,1,0,$arialBold,$black,17,0,1);
        
        perforacion();
        
        
        // Creacion del Barcode
        barcode($UPC,8,40,1.3,95,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
