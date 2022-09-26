<?php                      //   1      2       3      4      5
    $correctos = array('QTY','SIZE','STYLE','UPC','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'12M');
        $STYLE = asignar(2,'514416202');
        $UPC = asignar(3,'885347909816');
        $COLOR = asignar(4,'Light Blue');
        
        // Creacion del formato
        formato(200,125,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,20,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,35,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,50,1,0,$arial,$black,9,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,15,40,1.4,63,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>