<?php                       //   1       2       3            4     5      6       7
    $correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE','UPC','PRICE','FABRIC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'M4943C20');
        $COLOR = asignar(2,'SUNBRIGHT');
        $DESCRIPTION = asignar(3,'SUNDAY FUNDAY CROP');
        $SIZE = asignar(4,'SMALL');
        $UPC = asignar(5,'123456789104');
        $PRICE = asignar(6,'19.99');
        $FABRIC = asignar(7,'78% POLY 21% VISCOSE 1% SPANDEX');
        
        // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $times = fuente('times.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('Project Social T',0,50,1,0,$times,$black,14,0,0);
        
        texto($STYLE,7,65,0,0,$arialNarrowBold,$black,8,0,0);
        
        texto($COLOR,0,65,2,5,$arialNarrowBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,75,1,0,$arialNarrowBold,$black,7,0,0);
        
        cajaRellena(0,156,149,25,$vicsColor,$vicsColor);
        texto($SIZE,0,176,2,7,$arialBold,$black,15,0,0);
        
        parrafo($FABRIC,7,194,0,0,$arial,$black,5,0,13,8);
        
        perforacion(150, 325, 285);
        
        texto('MANUFACTURER\'S',5,298,0,0,$arial,$black,4,0,0);
        texto('SUGGESTED',5,306,0,0,$arial,$black,4,0,0);
        texto('RETAIL',5,314,0,0,$arial,$black,4,0,0);
        texto($PRICE,0,313,2,5,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,80,1,62,'UPC');
        
        barcodeTexto(2,0,-7,9,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
