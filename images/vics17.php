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
        $FABRIC = asignar(6,'95% RAYON 5% SPANDEX');
        
        // Creacion del formato
        formato(150,325,255,255,255);
        agujero(75, 25);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos         
        
        texto($STYLE,10,51,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,51,2,10,$arialNarrow,$black,8,0,0);
        
        parrafo($FABRIC,10,160,0,0,$arial,$black,6,0,15,10);
        
        texto($SIZE,0,170,2,20,$arialBold,$black,15,0,0);
     
        perforacion(150, 325, 285);
        
        texto('MANUFACTURER\'S',5,299,0,0,$arial,$black,6,0,0);
        texto('SUGGESTED',5,306,0,0,$arial,$black,6,0,0);
        texto('RETAIL',5,314,0,0,$arial,$black,6,0,0);
        texto($PRICE,0,313,2,7,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,55,1,87,'UPC');
        
        barcodeTexto(2,0,-7,9,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
