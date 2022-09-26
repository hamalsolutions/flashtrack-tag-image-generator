<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','COLOR CODE','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'35336811');
        $COLOR = asignar(2,'BLACK/BLAC');
        $COLORCODE = asignar(3,'BLB');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'400012290619');
        $PRICE = asignar(6,'19.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,60,0,0,$arial,$black,8,0,0);
        texto($COLORCODE.'/'.$COLOR, 0, 60, 2, 10, $arial, $black, 8, 0, 15, 12);
        
        texto('SIZE',10,165,0,0,$arial,$black,8,0,0);
        texto($SIZE,60,170,0,0,$arial,$black,14,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,60,1.2,70,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
