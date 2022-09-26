<?php                    //    1     2        3      4       5
    $correctos = array('QTY','UPC','STYLE','COLOR','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'887840440391');
        $STYLE = asignar(2,'15095');
        $COLOR = asignar(3,'BLACK');
        $SIZE = asignar(4,'SMALL');
        $PRICE = asignar(5,'12.00');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('nordstrom_2010.ttf');
        
            // Introducimos los datos
        
        texto('N',0,26,1,0,$logo,$black,18,0,0);

        texto($STYLE,15,47,0,0,$arialBold,$black,10,0,0);
        
        texto($COLOR,15,65,0,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,15,85,0,0,$arialBold,$black,10,0,0);

        texto($PRICE,0,190,1,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,63,1.5,90,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
