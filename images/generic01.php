<?php                               //       1          2          3           4           5
    $correctos = array('QTY','STYLE','UPC','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1510-PC108');
        $UPC = asignar(2,'813698010004');
        $COLOR = asignar(3,'BLK');
        $SIZE = asignar(4,'28');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,22,1,0,$arial,$black,10,0,0);        

        texto($COLOR,0,40,1,0,$arial,$black,10,0,0);        

        texto($SIZE,0,140,1,0,$arialBold,$black,10,0,0);                 
    
    
        // Creacion del Barcode
        barcode($UPC,18,58,1,52,'UPC');
        
        barcodeTexto(1.5,0,0,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
