<?php                       //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','DESCRIPTION','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'12141-263');
        $DESCRIPTION = asignar(2,'AMSTERDAM');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884616098831');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        setAsSticker(15);
        
        texto($STYLE,10,20,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,20,2,15,$arial,$black,9,0,0);
        
        texto($DESCRIPTION,10,40,0,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,54,1,64,'UPC');
        
        barcodeTexto(2,-1,-3,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
