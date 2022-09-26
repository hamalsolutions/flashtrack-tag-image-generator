<?php                      //   1       2      3     4       5       6
    $correctos = array('QTY','STYLE','COLOR','SIZE','SIZE2','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'D6298-7738K');
        $COLOR = asignar(2,'RED');
        $SIZE  = asignar(3,'S');
        $SIZE2 = asignar(4,'Small');
        $UPC = asignar(5,'614141999996');
        $PRICE = asignar(6,'$19.99');

            // Creacion del formato
        formato(170,300,255,255,255);

        // Colores a usar
        $black = color(0,0,0);
        $blue  = color(68,127,172);
        $red   = color(223,90,66);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('JunkFoodsWomen_Logo.ttf');
        
        // Introducimos los datos

        agujero(85,25);

        texto('J',0,110,1,0,$logo,$blue,60,0,0);
        texto('j',0,110,1,0,$logo,$red,60,0,0);
        

        texto($STYLE,10,125,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,125,2,10,$arial,$black,8,0,0);
        
        texto($SIZE,0,230,1,0,$arial,$black,9.5,0,0);
        texto($SIZE2,0,230,2,10,$arial,$black,9.5,0,0);

        texto('MCX Retail Price',0,270,2,10,$arial,$black,8,0,0);
        texto($PRICE,0,285,2,10,$arialBold,$black,10,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,110,1.2,85,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
