<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'VN-0GZOYB2');
        $COLOR = asignar(2,'WHITE BLACK');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'0700053572188');
        $DESCRIPTION = asignar(5,'BLACK TEE MEN');
        
        // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,13,0,0,$arial,$black,9,0,0);
        if (strlen($DESCRIPTION)>30)
            texto($DESCRIPTION,10,23,0,0,$arial,$black,6,0,0);
        else
            texto($DESCRIPTION,10,23,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,35,2,5,$arial,$black,7,0,0);
        
        texto('SIZE',0,60,3,-120,$arial,$black,9,0,0);
        texto($SIZE,0,78,3,-120,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,38,1,50,'EAN');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
