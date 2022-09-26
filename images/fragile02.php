<?php                       //   1       2       3     4     5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'AE379017IN');
        $COLOR = asignar(2,'IRS');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884140363344');
        $PRICE = asignar(5,'202.00');
        
        // Creacion del formato
        formato(400,50,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('STYLE: '.$STYLE,40,15,0,0,$arial,$black,8,0,0);
        
        texto('COLOR: '.$COLOR,40,30,0,0,$arial,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,40,45,0,0,$arial,$black,8,0,0);
        
        texto('MSRP',0,25,2,14,$arialBold,$black,8,0,0);
        texto($PRICE,0,35,2,10,$arialBold,$black,8,0,1);
        
        // Creacion del Barcode
        barcode($UPC,150,10,1.1,22,'UPC');
        
        barcodeTexto(1,0,-3,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
