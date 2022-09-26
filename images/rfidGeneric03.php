<?php                      //   1      2       3      4      5
    $correctos = array('QTY','STYLE','SIZE','COLOR','UPC','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'103-2719');
        $SIZE = asignar(2,'S');
        $COLOR = asignar(3,'BRWN/NATURAL');
        $UPC = asignar(4,'88936503776');
        $PRICE = asignar(5,'185.00');
        
            // Creacion del formato
        formato(196,72,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        texto('E',130,23,0,0,$logo,$black,16,0,0);
        
        texto($STYLE,10,15,0,0,$arial,$black,6,0,0);
        
        texto($SIZE,10,25,0,0,$arial,$black,6,0,0);
        
        texto($COLOR,10,35,0,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,185,1,0,$arial,$black,6,90,1);
        
        // Creacion del Barcode
        barcode($UPC,20,32,1.2,27,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
