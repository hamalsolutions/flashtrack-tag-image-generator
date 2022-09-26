<?php                      //  1       2       3        4        5      6
    $correctos = array('QTY','STYLE','DEPT','CLASS','ITEM','UPC','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'4AN91990T');
        $DEPT = asignar(2,'43');
        $CLASS = asignar(3,'01');
        $ITEM = asignar(4,'2127');
        $UPC = asignar(5,'704386281298');
        $COLOR = asignar(6,'WHITE');
        $SIZE = asignar(7,'L');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
        
        texto($SIZE,0,30,1,0,$arialBold,$black,13,0,0);                

        texto($DEPT,0,50,3,70,$arialBold,$black,9,0,0);

        texto($CLASS,0,50,1,0,$arialBold,$black,9,0,0);
        
        texto($ITEM,0,50,3,-70,$arialBold,$black,9,0,0);
        
        texto($COLOR.' / '.$STYLE,0,68,1,0,$arial,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,12,70,1.1,60,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');        
    }
?>