<?php                      //   1      2        3           4      5
    $correctos = array('QTY','STYLE','UPC','GENDER','SIZE','COLOR','COLOR CODE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'7201413');
        $UPC = asignar(2,'885347467323');
        $GENDER = asignar(3,'MALE');
        $SIZE = asignar(4,'XL');
        $COLOR = asignar(5,'KELLY GREEN');
        $COLORCODE = asignar(6,'003');
        $PRICE = asignar(7,'20.00');
        
        // Creacion del formato
        formato(125,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($GENDER,10,10,0,0,$arial,$black,6.5,0,0);
        
        texto($COLOR,10,19,0,0,$arial,$black,6.5,0,0);
        
        texto($STYLE,10,28,0,0,$arial,$black,6.5,0,0);
        
        texto($COLORCODE,0,27,2,10,$arial,$black,6.5,0,0);
        
        texto('MSRP',0,82,1,0,$arialBold,$black,6,0,0);
        
        texto($PRICE,0,88,2,5,$arial,$black,8,0,1);
        
        texto($SIZE,0,97,1,0,$arialBold,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,6,30,1,32,'UPC');
        barcodeTexto(1, 0, 0, 0, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>