<?php                     //    1      2      3      4
    $correctos = array('QTY','SIZE','COLOR','UPC','STYLE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE  = asignar(1,'S');
        $COLOR = asignar(2,'811 QUEEN');
        $UPC   = asignar(3,'887043288776');
        $STYLE = asignar(4,'CEL PINK W DNM JOGGER');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto('Size:',10,20,0,0,$arial,$black,9.5,0,0);
        texto($SIZE,40,20,0,0,$arial,$black,9,0,0);
        
        texto('Color:',90,20,0,0,$arial,$black,9.5,0,0);
        texto($COLOR,130,20,0,0,$arial,$black,9.0,0,0);
        
        texto('STYLE:',10,35,0,0,$arial,$black,8,0,0);
        texto($STYLE,50,35,0,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        setAsSticker(10);
        
        barcode($UPC,15,30,1.4,55,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
