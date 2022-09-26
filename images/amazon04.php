<?php                       //   1       2       3     4     5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'08ATM002');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884616098831');
        $PRICE = asignar(5,'18.00');
        
        // Creacion del formato
        formato(125,238,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('SIZE',10,25,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,37,3,80,$arial,$black,9,0,0);
        
        texto($STYLE,0,25,2,8,$arial,$black,9,0,0);
        
        texto($COLOR,0,55,1,0,$arial,$black,9,0,0);
        
        texto('-- - - - - - - - - - - - - --',0,168,1,0,$arial,$black,10,0,0);
        
        texto('Suggested Retail',10,185,0,0,$arial,$black,8,0,0);
        texto($PRICE,0,205,2,10,$arialBold,$black,10,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,68,1,70,'UPC');
        
        barcodeTexto(2,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
