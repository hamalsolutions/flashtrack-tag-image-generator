<?php              //   1       2       3      4      5      6         7
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'73802A01');
        $COLOR = asignar(2,'Black');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'884918724360');
        $PRICE     = asignar(5,'42.00');
        $GROUPNAME = asignar(6,'WEAR NOW');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Style: '.$STYLE,0,50,1,0,$arial,$black,9,0,0);
        
        texto('Color: '.$COLOR,0,70,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,107,1,0,$arial,$black,17,0,0);
        
        texto($GROUPNAME,0,137,1,0,$arialBold,$black,10,0,0);
        
        cajaRellena(1,165,147,25,$vicsColor,$vicsColor);
        
        texto($PRICE,0,305,1,0,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,182,1.1,77,'UPC');
        
        barcodeTexto(2,0,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
