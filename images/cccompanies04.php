<?php                     //   1       2       3     
    $correctos = array('QTY','STYLE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'BB0002940KR');
        $PRICE = asignar(2,'19.99');
        $UPC = asignar(3,'885347132467');
        
            // Creacion del formato
        formato(150,275,255,255,255);
                
            // Colores a usar 
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        imagefilledellipse($img,73,25,12,12,$transparent);
        imageellipse($img,73,25,12,12,$gray);
        
        // Introducimos los datos
        
        texto($STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,260,1,0,$arial,$black,14,0,1);
                
         // Creacion del Barcode
        barcode($UPC,12,95,1.1,70,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
