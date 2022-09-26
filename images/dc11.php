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
        formato(163,125,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_TRADEMARK_Logo.ttf'); 

        // Introducimos los datos
        texto('D',20,32,0,0,$logo,$black,30,0,0);

        texto('STYLE  '.$STYLE,10,52,0,0,$arial,$black,8,0,0);        

        texto($DEPT,0,35,3,-45,$arialBold,$black,9,0,0);

        texto($CLASS,0,35,3,-90,$arialBold,$black,9,0,0);
        
        texto($SUB,0,35,3,-130,$arialBold,$black,9,0,0);                

        texto($PRICE,0,20,2,8,$arialBold,$black,9,0,1);                

        // Creacion del Barcode
        barcode($UPC,17,50,1.1,60,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');        
    }
?>