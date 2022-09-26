<?php                       //   1       2      3     4      5      6       7      8
    $correctos = array('QTY','PCS-SET','SIZE','SKU','UPC','PRICE','DEPT','CLASS','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PCS_SET = asignar(1,'1');
        $SIZE = asignar(2,'XLARGE');
        $SKU = asignar(3,'176564');
        $UPC = asignar(4,'885347141421');
        $PRICE = asignar(5,'9.99');
        $DEPT = asignar(6,'30');
        $CLASS = asignar(7,'12');
        $SUB = asignar(8,'03');
        
        // Creacion del formato
        formato(300,150,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('ruslogo.ttf');
        
        // Introducimos los datos
        
        texto('R',0,30,1,0,$logo,$black,30,90,0);
        
        texto($DEPT,0,55,3,80,$arialBold,$black,9,90,0);
        texto($CLASS,0,55,1,0,$arialBold,$black,9,90,0);
        texto($SUB,0,55,3,-85,$arialBold,$black,9,90,0);
        texto('DEPT     CLASS       SUB',0,68,1,0,$arial,$black,7,90,0);
        
        texto('SIZE',20,85,0,0,$arial,$black,7,90,0);
        texto($SIZE,50,85,0,0,$arialBold,$black,9,90,0);
        
        texto($SKU,0,24,3,-40,$arialBold,$black,10,0,0);
        imageline($img,120,28,220,28,$black);
        texto('SKN',160,40,0,0,$arial,$black,7,0,0);
        
        texto($PCS_SET.'PC',120,60,0,0,$arial,$black,11,0,0);
        
        texto($PRICE,0,290,1,0,$arialBold,$black,12,90,1);
        
        
        // Creacion del Barcode
        barcode($UPC,100,75,1.3,78,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
