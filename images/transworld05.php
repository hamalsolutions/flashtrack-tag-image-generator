<?php                       //  1      2      3
    $correctos = array('QTY','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'PU8A0013TW');
        $UPC = asignar(2,'123456789012');
        $PRICE = asignar(3,'7.99');

        // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arial = fuente('arial.ttf');

        // Introducimos los datos
        
        setAsSticker(10);

        texto($PRICE,0,25,2,10,$arialBold,$black,10,0,1);

        texto('STYLE: ',10,50,0,0,$arial,$black,8,0,0);
        texto($STYLE,50,50,0,0,$arialBold,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,15,50,1.1,80,'UPC');
        
        barcodeTexto(1,0,-5,5,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
