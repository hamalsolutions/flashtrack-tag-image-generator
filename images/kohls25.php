<?php                      //  1       2       3        4        5      6   
    $correctos = array('QTY','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'4RN91081KC');
        $DEPT = asignar(2,'059');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'13');
        $UPC = asignar(5,'704386281298');
        $PRICE = asignar(6,'$18.00');
        
            // Creacion del formato
        formato(150,187,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',10,25,0,0,$arialBold,$black,10,0,0);
        texto('Kohls.com',10,42,0,0,$arial,$black,9,0,0);
        
        texto($DEPT,0,42,3,-35,$arialBold,$black,9,0,0);
        
        texto($CLASS,0,42,3,-80,$arialBold,$black,9,0,0);
        
        texto($SUB,0,42,3,-120,$arialBold,$black,9,0,0);
        
        texto('STYLE '.$STYLE,10,62,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,23,2,10,$arialBold,$black,9,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,79,1.1,75,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>