<?php                     //   1       2       3      4     5       6      7
    $correctos = array('QTY','STYLE','DEPT','COLOR','SIZE','UPC','PRICE','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'AZ013BXMKZA');
        $DEPT = asignar(2,'85');
        $COLOR = asignar(3,'NAVY');
        $SIZE = asignar(4,'SMALL');
        $UPC = asignar(5,'885347132467');
        $PRICE = asignar(6,'15.99');
        $SKU = asignar(7,'14426241');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar 
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('DEPT',10,40,0,0,$arial,$black,9,0,0);
        texto($DEPT,60,40,0,0,$arial,$black,9,0,0);
        
        
        texto('STY#',10,60,0,0,$arial,$black,9,0,0);
        texto($STYLE,60,60,0,0,$arial,$black,9,0,0);
        
        texto('SIZE:',10,80,0,0,$arial,$black,9,0,0);
        texto($SIZE,60,80,0,0,$arial,$black,9,0,0);
        
        texto('COLOR',10,100,0,0,$arial,$black,9,0,0);
        texto($COLOR,60,100,0,0,$arial,$black,9,0,0);
        
        texto('SKU',40,120,0,0,$arial,$black,7,0,0);
        texto($SKU,75,120,0,0,$arial,$black,7,0,0);
        
        texto(sinSigno($PRICE),0,250,1,0,$arial,$black,14,0,0);
        
        
         // Creacion del Barcode
        barcode($UPC,12,115,1.1,70,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
