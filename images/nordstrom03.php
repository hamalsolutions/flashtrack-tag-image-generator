<?php                      //   1      2       3      4     5       6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'A01234567890123');
        $UPC = asignar(4,'619720171596');
        $DEPT = asignar(5,'75');
        $PRICE = asignar(6,'120.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,72,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,97,2,7,$arial,$black,8,0,0);
        
        texto(formatizarTexto('0         12345       67890        1',$UPC),0,165,1,0,$arial,$black,8,0,0);
        
        texto('Size:',15,187,0,0,$arial,$black,9,0,0);
        texto($SIZE,50,187,0,0,$arial,$black,9,0,0);
        
        texto('Dept:',15,210,0,0,$arial,$black,9,0,0);
        texto($DEPT,50,210,0,0,$arial,$black,9,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - --',0,253,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,287,2,7,$arialBold,$black,10,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,93,1.2,62,'UPC');
        
        barcodeTexto(-1,0,0,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
