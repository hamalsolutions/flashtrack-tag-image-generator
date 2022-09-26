<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','DEPT','CLASS','SUB','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'AL774HBB1');
        $DEPT = asignar(2,'059');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'14');
        $UPC = asignar(5,'886726938885');
        $PRICE = asignar(6,'24.00');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('KOHL\'S',10,22,0,0,$arialBold,$black,10,0,0);
        texto('Kohls.com',10,33,0,0,$arial,$black,8,0,0);
        
        texto($DEPT,0,20,3,-35,$arialBold,$black,11,0,0);
        texto($CLASS,0,20,3,-85,$arialBold,$black,11,0,0);
        texto($SUB,0,20,3,-125,$arialBold,$black,11,0,0);
        
        texto($STYLE,10,45,0,0,$arial,$black,7,0,0);
        
        texto($PRICE,90,138,0,0,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,45,1.1,65,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
