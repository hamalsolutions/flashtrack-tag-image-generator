<?php                      //  1      2      3      4      5      6 
    $correctos = array('QTY','SIZE','PO#','STYLE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'XL');
        $PO = asignar(2,'0474362');
        $STYLE = asignar(3,'40855');
        $UPC = asignar(4,'791666631447');
        $PRICE = asignar(5,'60.00');
        $DEPT = asignar(6,'471');
        
            // Creacion del formato
        formato(125,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('BEALLS',30,50,0,0,$arialBold,$black,12,0,0);
        
        texto('PO# '.$PO,0,73,1,0,$arial,$black,7.5,0,0);
        
        texto('Vdr Style# '.$STYLE,0,87,1,0,$arial,$black,7,0,0);
        
        texto('Dept# '.$DEPT,0,101,1,0,$arial,$black,7.5,0,0);
        
        texto($SIZE,0,210,1,0,$arialBold,$black,12,0,0);
        
        texto($PRICE,0,270,1,0,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,118,1,60,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
