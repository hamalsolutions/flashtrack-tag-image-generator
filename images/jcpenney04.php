<?php                      //   1       2     3       4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'KELLY GREEN');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'1WRD2057');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'17.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('SIZE',30,70,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,90,3,85,$arial,$black,15,0,0);
        
        texto($STYLE,15,118,0,0,$arial,$black,7.5,0,0);
        
        texto($COLOR,0,118,2,7,$arial,$black,6.5,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,15,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,15,108,1.2,93,'UPC');
        
        barcodeTexto(2.5,-1,-1,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
