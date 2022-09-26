<?php                       //   1       2          3      4        5    
    $correctos = array('QTY','STYLE','DESCRIPTION','UPC','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'K52422');
        $DESCRIPTION = asignar(2,'ORIGINAL TEE');
        $UPC = asignar(3,'886016274273');
        $COLOR = asignar(4,'WHT');
        $SIZE = asignar(5,'S');
        
        // Creacion del formato
        formato(150,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,20,1,0,$arial,$black,11,0,0);
        
        $fontSize = (strlen($DESCRIPTION)>17)?7.5:8;
        
        texto($DESCRIPTION,10,37,0,0,$arialNarrow,$black,$fontSize,0,0);
        
        texto($SIZE,0,37,2,10,$arial,$black,9.5,0,0);
        
        texto($COLOR,10,52,0,0,$arialNarrow,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,18,58,1,30,'UPC');
        
        barcodeTexto(1,0,-5,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
