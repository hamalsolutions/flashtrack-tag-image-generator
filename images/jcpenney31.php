<?php                      //   1       2       3       4      5     6     7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','LOT','SUPP','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'MAGENTA');
        $SIZE = asignar(2,'XS');
        $STYLE = asignar(3,'2209M');
        $UPC = asignar(4,'845550818497');
        $PRICE = asignar(5,'10');
        $LOT = asignar(6,'632-3603');
        $SUPP = asignar(7,'145086');
        $DESCRIPTION = asignar(8,'LOVE SQUARED');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        //texto('Hybrid Tees',0,55,1,0,$arial,$black,12,0,0);
        
        agujero(85, 25);
        
        imageline($img,0,40,168,40,$black);
        imageline($img,0,41,168,41,$black);
        
        texto('SIZE',10,58,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,15,82,0,0,$arialBold,$black,20,0,0);
        
        texto($DESCRIPTION,15,95,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,15,120,0,0,$arial,$black,8,0,0);
        
        texto('LOT#',95,135,0,0,$arialNarrow,$black,8,0,0);
        
        texto($LOT,0,135,2,10,$arialNarrow,$black,8,0,0);
        
        imageline($img,0,141,168,141,$black);
        imageline($img,0,142,168,142,$black);
        
        texto('SUPP.',95,152,0,0,$arial,$black,6,0,0);
        
        texto($SUPP,120,152,0,0,$arial,$black,6,0,0);
        
        texto('STYLE # '.$STYLE,0,175,1,0,$arial,$black,8,0,0);
        
        perforacion();
                
        texto($PRICE,0,285,1,0,$arialBold,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,150,1.2,77,'UPC');
        barcodeTexto(1, 0, 0, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
