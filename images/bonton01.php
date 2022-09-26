<?php                       //   1       2       3     4  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'CJ20133SD7');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'3');
        $UPC = asignar(4,'887043232434');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        setAsSticker(15);
        
        texto('STYLE: '.$STYLE,10,28,0,0,$arial,$black,8,0,0);
        
        texto('COLOR: '.$COLOR,10,45,0,0,$arial,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,10,62,0,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,74,1,45,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>