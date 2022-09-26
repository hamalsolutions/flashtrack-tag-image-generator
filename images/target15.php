<?php                      //   1      2       3      4        5          6   
    $correctos = array('QTY','COLOR','SIZE','ITEM','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY/MARINE');
        $SIZE = asignar(2,'XS/TP');
        $ITEM = asignar(3,'10338974001');
        $UPC = asignar(4,'807172027145');
        $DESCRIPTION = asignar(5,'ARTICLE');
        $PRICE = asignar(6,'9.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        $fontSize = strlen($DESCRIPTION)>15?9:10;
        
        texto($DESCRIPTION,0,145,1,0,$arial,$black,$fontSize,0,0);
        
        texto($ITEM,0,125,1,0,$arial,$black,11,0,0);
        
        texto($COLOR,0,107,1,0,$arial,$black,9,0,0);
        
        texto('SIZE/TAILLE',0,60,1,0,$arialBold,$black,12,0,0);
        texto($SIZE,0,80,1,0,$arial,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,277,1,0,$arial,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,125,1.3,105,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
