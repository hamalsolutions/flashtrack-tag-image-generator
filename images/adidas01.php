<?php                      //       1         2        3     4     5     6       7
    $correctos = array('QTY','PRODUCT NAME','COLOR','STYLE','PO','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PRODUCT_NAME = asignar(1,'BLACKBIRDPASTEL');
        $COLOR = asignar(2,'BANANA');
        $STYLE = asignar(3,'BI778');
        $PO = asignar(4,'PKG00085');
        $UPC = asignar(5,'190308559840');
        $SIZE = asignar(6,'S');
        $PRICE = asignar(7,'24.00');
        // Creacion del formato
        formato(200,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $tahoma = fuente('tahomabd.ttf');
        $arialNB = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(100,25);

        texto($PRODUCT_NAME,0,60,1,0,$tahoma,$black,9,0,0);

        texto($COLOR,10,80,0,0,$tahoma,$black,9,0,0);
        texto($STYLE,0,80,2,10,$tahoma,$black,9,0,0);

        texto($PO,0,105,1,0,$tahoma,$black,7,0,0);

        texto($SIZE,0,225,1,0,$arialBold,$black,16,0,0);
        
        perforacion(290,250);

        texto($PRODUCT_NAME,0,260,1,0,$tahoma,$black,6,0,0);
        texto($COLOR,0,270,1,0,$tahoma,$black,6,0,0);
        texto($STYLE,0,260,2,10,$tahoma,$black,6,0,0);
        
        texto($PRICE,0,295,2,10,$arialNB,$black,14,0,1);
        texto($SIZE,10,295,0,0,$arialBold,$black,14,0,0);

        // Creacion del Barcode
        barcode($UPC,28,95,1.2,95,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
