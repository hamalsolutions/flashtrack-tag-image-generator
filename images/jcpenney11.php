<?php                     //    1       2       3      4       5      6  
    $correctos = array('QTY','ITEM#','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $ITEM = asignar(1,'5208-0105');
        $COLOR = asignar(2,'CHOCOLATE');
        $SIZE = asignar(3,'3XLT');
        $STYLE = asignar(4,'II0822');
        $UPC = asignar(5,'843581137440');
        $PRICE = asignar(6,'25.00');
        
            // Creacion del formato
        formato(168,300,255,255,255);
        
            // Colores a usar
        $blue = color(0,0,255);
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo_font = fuente('WalMart_Logo.ttf');
        
            // Contenido del formato
        
        texto('STYLE#: '.$STYLE,15,80,0,0,$arial,$black,8,0,0);
        
        texto('COLOR: '.$COLOR,15,100,0,8,$arial,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,15,120,0,0,$arial,$black,8,0,0);
        
        texto($ITEM,0,155,1,80,$arial,$black,9,0,0);
        
        texto('Retail Price',20,270,1,0,$arialBold,$black,12,0,0);
        texto($PRICE,10,290,1,50,$arial,$black,12,0,1);
        
        
            // Creacion del Barcode
        barcode($UPC,18,155,1.1,75,'UPC');
        
        barcodeTexto(1,0,-5,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>