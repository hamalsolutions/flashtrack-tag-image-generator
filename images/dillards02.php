<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'C1R1082');
        $COLOR = asignar(2,'MIDNIGHT BLACK ROSE NIGHT');
        $SIZE = asignar(3,'SMALL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'19.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('STYLE',10,80,0,0,$arial,$black,9,0,0);
        texto($STYLE,60,80,0,0,$arial,$black,9,0,0);
        
        texto('COLOR',10,97,0,0,$arial,$black,9,0,0);
        parrafo($COLOR, 60, 97, 0, 0, $arial, $black, 9, 0, 15, 12);
        
        texto('SIZE',10,125,0,0,$arial,$black,9,0,0);
        texto($SIZE,60,125,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,110,1.2,70,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
