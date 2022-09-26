<?php                       //   1       2       3     4 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'KFEKD004549');
        $COLOR = asignar(2,'PINK/ROYAL');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'6197 2077 3042');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        setAsSticker(10);
        
        texto('SIZE',10,25,0,0,$arial,$black,10,0,0);
        texto($SIZE,0,40,3,150,$arial,$black,10,0,0);
        
        texto($STYLE,0,25,2,10,$arial,$black,10,0,0);
        
        texto($COLOR,0,55,1,0,$arial,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,30,50,1.2,80,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
