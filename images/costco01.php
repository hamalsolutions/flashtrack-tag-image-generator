<?php                      //   1      2     3     4       5  
    $correctos = array('QTY','SIZE','ITEM','UPC','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'L/G');
        $ITEM = asignar(2,'123456');
        $UPC = asignar(3,'123456543218');
        $DEPT = asignar(4,'COSTCO D39');
        $PRICE = asignar(5,'$29.99');
        
        // Creacion del formato
        formato(300,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DEPT,0,20,1,0,$arial,$black,14,270,0);
        
        texto($ITEM,0,50,1,0,$arial,$black,14,270,0);
        
        texto($SIZE,0,235,1,0,$arialBold,$black,11.5,270,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - - --',0,250,1,0,$arialBold,$black,7,270,0);
        
        texto($PRICE,0,280,1,0,$arial,$black,12,270,-1);
        
        
        // Creacion del Barcode
        barcode($UPC,15,220,1.2,75,'UPC',270);
        
        barcodeTexto(1,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>