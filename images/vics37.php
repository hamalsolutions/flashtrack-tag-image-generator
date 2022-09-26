<?php                       //   1       2       3     4     5   
    $correctos = array('QTY','STYLE','COLOR','SIZE','EAN13','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'14040710002');
        $COLOR = asignar(2,'58');
        $SIZE = asignar(3,'S');
        $EAN13 = asignar(4,'8717851834402');
        $PRICE = asignar(5,'119.00');
        
        // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos         
        
        texto($STYLE,10,51,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,51,2,10,$arialNarrow,$black,9,0,0);
        
        texto($SIZE,0,170,2,20,$arialBold,$black,15,0,0);
        
        texto('MANUFACTURES',5,299,0,0,$arial,$black,6,0,0);
        texto('SUGGESTED',5,306,0,0,$arial,$black,6,0,0);
        texto('RETAIL',5,314,0,0,$arial,$black,6,0,0);
        texto($PRICE,0,313,2,7,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($EAN13,18,55,1,87,'EAN');
        
        barcodeTexto(2,0,-7,12,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
