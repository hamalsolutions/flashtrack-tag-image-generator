<?php                     //   1       2       3     4    
    $correctos = array('QTY','DESC','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DESC = asignar(1,'MARVEL JUNIORS GIRLS RULE');
        $SIZE = asignar(2,'LG');
        $UPC = asignar(3,'400012390883');
        $PRICE = asignar(4,'18.00');
                       
            // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('Universal_Logo.ttf');
                                                     
        // Introducimos los datos
        
        texto('U',0,68,1,0,$logo,$black,40,0,0);
        
        texto('®',108,52,0,0,$arial,$black,7,0,0);
        
        texto($DESC,0,155,1,0,$arialNarrow,$black,7,0,0);
        
        texto($SIZE,0,180,1,0,$arialBold,$black,11,0,0);
        
        texto($PRICE,0,210,1,0,$arialBold,$black,10,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,5,92,1,41,'UPC');
        
        barcodeTexto(2,0,-4,5,'courbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
