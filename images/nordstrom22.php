<?php                     //    1     2           3          4      5
    $correctos = array('QTY','UPC','STYLE','DESCRIPTION','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'001234567895');
        $STYLE = asignar(2,'15095');
        $DESCRIPTION = asignar(3,'COTTON SKIRT');
        $COLOR = asignar(4,'BLACK');
        $SIZE = asignar(5,'SMALL');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
            // Introducimos los datos
        
        texto('NORDSTROM',0,25,1,0,$arial,$black,10,0,0);
        
        texto($STYLE,15,45,0,0,$arialBold,$black,10,0,0);
        
        texto($DESCRIPTION,15,58,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,15,73,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,15,88,0,0,$arialNarrow,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,73,1.3,65,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
