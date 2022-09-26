<?php                       //   1       2       3     4     5       6
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','FABRIC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2365OLT');
        $COLOR = asignar(2,'NAVY');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'000000123457');
        $PRICE = asignar(5,'34.00');
        $FABRIC = asignar(6,'78% POLY 21% VISCOSE 1% SPANDEX');
        
        // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto($STYLE,7,51,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,51,2,5,$arialNarrow,$black,8,0,0);
        
        cajaRellena(0,156,149,25,$vicsColor,$vicsColor);
        texto($SIZE,0,176,2,7,$arialBold,$black,15,0,0);
        
        parrafo($FABRIC,7,164,0,0,$arial,$black,5,0,13,8);
        
        perforacion(150, 325, 285);
                        
        texto('MANUFACTURER\'S',5,298,0,0,$arial,$black,6,0,0);
        texto('SUGGESTED',5,306,0,0,$arial,$black,6,0,0);
        texto('RETAIL',5,314,0,0,$arial,$black,6,0,0);
        texto($PRICE,0,313,2,5,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,55,1,87,'UPC');
        
        barcodeTexto(2,0,-7,9,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
