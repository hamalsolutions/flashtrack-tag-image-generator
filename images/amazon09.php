<?php                       //   1       2           3       4     5
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ALT1224');
        $DESCRIPTION = asignar(2,'LIVING THE DREAM');
        $COLOR = asignar(3,'HEATHER BLUE');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'877634003765');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        // Introducimos los datos
        
        texto($STYLE,15,20,0,0,$arialBold,$black,7,0,0);
        
        texto($DESCRIPTION,15,30,0,0,$arial,$black,6,0,0);
        
        texto($COLOR,15,42,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,15,55,0,0,$arialBold,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,10,40,1.5,90,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
