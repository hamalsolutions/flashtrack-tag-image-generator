<?php                      //   1      2       3      4      5
    $correctos = array('QTY','SIZE','STYLE','UPC','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'2X (50/52)');
        $STYLE = asignar(2,'V5721MSW');
        $UPC = asignar(3,'693272855531');
        $COLOR = asignar(4,'BLACK');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto($STYLE,20,20,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,20,40,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,20,60,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,15,50,1.4,83,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>