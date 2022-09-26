<?php                    //     1          2          3      4      5      6
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'09210151');
        $DESCRIPTION = asignar(2,'CHAMBER BOARDSHORTS');
        $COLOR = asignar(3,'BLK');
        $SIZE = asignar(4,'28');
        $UPC = asignar(5,'9341913012423');
        $PRICE = asignar(6,'34.99');
        
            // Creacion del formato
        formato(125,237,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('UNIT_Logo.ttf');
        
        // Introducimos los datos
        texto('U',0,48,1,0,$logo,$black,25,0,0);
        
        texto($STYLE,0,118,1,0,$arialBold,$black,10,0,0);
        
        texto($DESCRIPTION,0,132,1,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,143,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,158,1,0,$arialBold,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - --',0,168,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,205,1,0,$arialNarrow,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,52,1,42,'EAN');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
