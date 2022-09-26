<?php                    //     1       2      3      4
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SM334-220-The Cool People Share Bracelet');
        $COLOR = asignar(2,'Chocolate');
        $SIZE = asignar(3,'Size One Size|One Size');
        $UPC = asignar(4,'000023949520');
        
            // Creacion del formato
        formato(250,187,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $times = fuente('times.ttf');
        
        // Introducimos los datos
        
        texto('The Cool People',10,35,0,0,$times,$black,10,0,0);
        
        texto($STYLE,10,58,0,0,$times,$black,9,0,0);
        
        texto($COLOR,10,77,0,0,$times,$black,10,0,0);
        
        texto($SIZE,10,98,0,0,$times,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,55,1.9,105,'128');
        
        barcodeTexto(0.5,-20,-3,4,'times.ttf');
        
        require_once('../includes/footer.php');
    }
?>