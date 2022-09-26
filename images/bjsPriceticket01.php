<?php                     //   1       2      3      4      5
    $correctos = array('QTY','ITEM','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $ITEM = asignar(1,'37015');
        $COLOR = asignar(2,'TURQ COMBO');
        $UPC = asignar(4,'606013317649');
        $SIZE = asignar(3,'S');
        $PRICE = asignar(5,'79.00');
                      
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $trukColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        // Introducimos los datos

        texto('ITEM#: '.$ITEM,10,40,0,0,$arial,$black,8,0,0);
        texto('COLOR: '.$COLOR,10,60,0,0,$arial,$black,8,0,0);
        
        cajaRellena(1,165,147,25,$trukColor,$trukColor);
        texto('SIZE: '.$SIZE,10,185,0,0,$arialBold,$black,15,0,0);
        
        
        if ($PRICE<>'') {
            texto('Manufacturer\'s',10,240,0,0,$arial,$black,7,0,0);
            texto('Suggested',10,250,0,0,$arial,$black,7,0,0);
            texto('Retail Price',10,260,0,0,$arial,$black,7,0,0);
        }
        perforacion(125, 325, 290);
        texto($PRICE,0,255,2,10,$arialBold,$black,12,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,20,80,1.0,60,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
