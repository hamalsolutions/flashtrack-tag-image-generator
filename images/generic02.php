<?php                               //       1             2           3        4
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1501-PC108');
        $COLOR = asignar(2,'BLK');
        $UPC = asignar(3,'813698010004');
        $SIZE = asignar(4,'28');
        
        // Creacion del formato
        formato(125,250,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,12,55,0,0,$arial,$black,13,0,0);
        
        texto($COLOR,0,83,1,0,$arial,$black,13,0,0);
        
        texto($SIZE,0,203,1,0,$arialBold,$black,13,0,0);
        
            // Creacion del Barcode
        barcode($UPC,5,102,1,61,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
