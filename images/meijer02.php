<?php                     //      1         2     3     4       5
    $correctos = array('QTY','DESCRIPTION','KEY','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'DESCRIPTION');
        $KEY = asignar(2,'654');
        $UPC = asignar(3,'001234567895');
        $SIZE = asignar(4,'MEDIUM');
        $PRICE = asignar(5,'$36.00');
        
        // Creacion del formato
        formato(125,213,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('USTL 8598',10,28,0,0,$arial,$black,6,0,0);
        
        texto('meijer',80,30,0,0,$arialBold,$black,10,0,0);
        
        texto($DESCRIPTION,0,50,1,0,$arial,$black,6,0,0);
        
        texto($KEY,0,70,1,0,$arial,$black,8,0,0);
        
        texto('SIZE',15,155,0,0,$arial,$black,6,0,0);
        imageline($img,15,157,32,157,$black); 
        texto($SIZE,15,172,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,195,1,0,$arial,$black,12,0,1);
        
            // Creacion del Barcode
        barcode($UPC,5,79,1,45,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
