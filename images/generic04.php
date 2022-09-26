<?php                       //  1     2     3       4          5
    $correctos = array('QTY','STYLE','UPC','SIZE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $STYLE = asignar(1,'J858');
        $UPC = asignar(2,'787026292137');
        $SIZE = asignar(3,'38');
        $COLOR = asignar(4,'KHAKI');
                       
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto('REFERENCE: '.$STYLE,0,28,1,0,$arial,$black,11,0,0);
                
        texto('SIZE: '.$SIZE,10,55,0,0,$arial,$black,11,0,0);
        
        texto($COLOR,0,55,2,15,$arial,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,20,50,1.3,78,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>