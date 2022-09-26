<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2CRE025');
        $COLOR = asignar(2,'LIGHT BLUE');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$16.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        texto($STYLE,0,70,1,0,$arial,$black,10,0,0);
        
        parrafo($COLOR, 0, 105, 1, 0, $arial, $black, 10, 0, 15, 12);
        
        texto($SIZE,0,140,1,0,$arialBold,$black,12,0,0);
        
        texto($PRICE,0,290,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,130,1.2,85,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
