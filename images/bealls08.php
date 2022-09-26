<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','DEPT','SIZE','UPC','PRICE','PO#','SKU','COMPARE PRICE','SPECIAL PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'930');
        $DEPT = asignar(2,'244');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'846169005360');
        $PRICE = asignar(5,'9.99');
        $PO = asignar(6,'835170');
        $SKU = asignar(7,'17919014');
        $COMPAREPRICE = asignar(8,'20.00');
        $SPECIALPRICE = asignar(9,'10.01');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255, 255, 255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('OUTLET',0,50,1,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,texto($PO.' -',15,70,0,0,$arial,$black,7,0,0)-32,70,0,0,$arial,$black,7,0,0);
        
        texto($SKU,texto($DEPT,15,85,0,0,$arial,$black,7,0,0),85,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,10,180,0,0,$arialBold,$black,10,0,0);
        
        texto($COMPAREPRICE,texto('COMPARE AT',10,200,0,0,$arialBold,$black,9,0,0)-10,200,0,0,$arialBold,$black,9,0,1);
        
        texto($PRICE,0,237,1,0,$arialBold,$black,14,0,1);
        
        cajaRellena(0, 250, 149, 24, $black, $black);
        
        texto('SAVE $'.sinSigno($SPECIALPRICE),0,266,1,0,$arialBold,$white,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,17,100,1,40,'UPC');
        
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
