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
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KOHLS_LOGO-B.ttf');
        // Introducimos los datos
        
        texto('K',10,18,0,0,$logo,$black,24,0,0);
        texto($PRICE,110,18,0,0,$arialBold,$black,10,0,1);
        
        texto('Kohls.com',10,30,0,0,$arial,$black,8,0,0);
        texto($DEPT,0,30,3,-40,$arial,$black,8,0,0);
        texto($CLASS,0,30,3,-90,$arial,$black,8,0,0);
        texto($SUB,0,30,3,-130,$arial,$black,8,0,0);
        
        texto('STYLE',10,40,0,0,$arial,$black,7,0,0);
        texto($STYLE,50,40,0,0,$arial,$black,7,0,0);
        
        // Creacion del Barcode
        barcode($UPC,40,43,1,45,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
