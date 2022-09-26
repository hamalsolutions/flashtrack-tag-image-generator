<?php                      //   1       2      3      4      5
    $correctos = array('QTY','SIZE','UPC','COLOR','STYLE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        //$QTY = asignar(1,'25');
        $SIZE = asignar(1,'XS');
        $UPC = asignar(2,'21815000016');
        $COLOR = asignar(3,'Black');
        $STYLE = asignar(4,'Fitted Tee Shirt');
        $PRICE = asignar(5,'$44.99');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        //$arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,61,1,0,$arial,$black,11,0,0);
        
        texto($COLOR,0,86,1,0,$arial,$black,11,0,0);
        
        texto($SIZE,0,120,1,0,$arialBold,$black,14,0,0);
        
        perforacion(150, 300, 258);
        
        texto($PRICE,0,286,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,140,1,85,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
