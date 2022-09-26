<?php                       //   1       2      3        4
    $correctos = array('QTY','POS','CAT','COMPARE PRICE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $POS = asignar(1,'3415684');
        $CAT = asignar(2,'0104');
        $PRICE_H = asignar(3,'85.00');
        $PRICE_L = asignar(4,'34.95');
        $UPC = asignar(5,'123456789012');
        
        // Creacion del formato
        formato(250,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Narrow_Slash.ttf');
        
        // Introducimos los datos
        agujero(225, 75);
        
        if ($POS<>'') {
            texto('POS',10,25,0,0,$arial,$black,9,0,0);

            texto($POS,40,25,0,0,$arial,$black,13,0,0);
        }
        texto('CAT',120,25,0,0,$arial,$black,9,0,0);
        
        texto($CAT,150,25,0,0,$arial,$black,13,0,0);
        
        texto('OUR PRICE',10,55,0,0,$arialBold,$black,12,0,0);
        
        texto($PRICE_L,0,80,3,150,$arialBold,$black,16,0,1);
        
        texto('COMPARE AT',10,110,0,0,$arial,$black,11,0,0);
        
        texto($PRICE_H,0,135,3,150,$arialBoldSlash,$black,14,0,1);
        
        if ($UPC<>'') {
            barcode($UPC,115,95,1,37,'UPC');

            barcodeTexto(1,0,-3,4,'arial.ttf');
        }
        require_once('../includes/footer.php');
    }
?>
