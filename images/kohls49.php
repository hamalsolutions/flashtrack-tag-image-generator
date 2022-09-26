<?php                      //  1       2       3        4        5      6
    $correctos = array('QTY','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ABC123');
        $DEPT = asignar(2,'027');
        $CLASS = asignar(3,'40');
        $SUB = asignar(4,'41');
        $UPC = asignar(5,'704386281298');
        $PRICE = asignar(6,'$19.99');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0); 
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
        texto('KOHL\'S',8,25,0,0,$arial,$black,14,0,0);

        texto('Kohls.com',10,40,0,0,$arialBold,$black,9,0,0);

        texto('STYLE  '.$STYLE,10,58,0,0,$arial,$black,8,0,0);        

        texto($DEPT,0,40,2,60,$arialBold,$black,10,0,0);

        texto($CLASS,0,40,2,35,$arialBold,$black,10,0,0);
        
        texto($SUB,0,40,2,10,$arialBold,$black,10,0,0);                

        texto($PRICE,0,25,2,10,$arialBold,$black,8,0,1);                

        // Creacion del Barcode
        barcode($UPC,15,50,1.4,80,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');        
    }
?>