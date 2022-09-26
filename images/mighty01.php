<?php                      //   1      2          3         4      5          6  
    $correctos = array('QTY','CLASS','SIZE','DESCRIPTION','SKU','CURRENCY','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $CLASS = asignar(1,'SMP');
        $SIZE = asignar(2,'EX LARGE');
        $DESCRIPTION = asignar(3,'WOODY TEE LRG');
        $SKU = asignar(4,'01196021');
        $CURRENCY = asignar(5,'USD');
        $PRICE = asignar(6,'19.99');
        
        // Creacion del formato
        formato(300,150,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($CLASS,120,20,0,-10,$arialBold,$black,11,0,0);
        
        texto($SIZE,0,40,3,-10,$arialBold,$black,11,0,0);
        
        texto($DESCRIPTION,0,60,3,-10,$arial,$black,11,0,0);
        
        texto($CURRENCY,20,280,0,0,$arialBold,$black,10,90,0);
        
        texto($PRICE,80,280,0,0,$arialBold,$black,10,90,1);
        
        
        // Creacion del Barcode
        barcode($SKU,90,80,1.2,60,'128',90);
        
        barcodeTexto(2,-1,-4,7,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>