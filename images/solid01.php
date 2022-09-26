<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'AL6290274G');
        $COLOR = asignar(2,'18Y');
        $SIZE = asignar(3,'24');
        $UPC = asignar(4,'070005357218');
        $PRICE = asignar(5,'262.00');
        
        // Creacion del formato
        formato(400,50,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('STYLE:',30,15,0,0,$arial,$black,8,0,0);
        texto($STYLE,70,15,0,0,$arial,$black,8,0,0);
        texto('COLOR:',30,27,0,0,$arial,$black,8,0,0);
        texto($COLOR,70,27,0,0,$arial,$black,8,0,0);
        texto('SIZE:',30,40,0,0,$arial,$black,8,0,0);
        texto($SIZE,60,40,0,0,$arial,$black,8,0,0);
        texto('MSRP',10,22,2,15,$arialBold,$black,7,0,0);
        texto($PRICE,30,35,3,-335,$arialBold,$black,8,0,1);
        
        // Creacion del Barcode
        barcode($UPC,115,6,1.4,30,'UPC');
        
        barcodeTexto(2,0,-3,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
