<?php                    //    1        2      3          4         5        6
    $correctos = array('QTY','STYLE','COLOR','SIZE','VENDOR CODE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'M11-02924');
        $COLOR = asignar(2,'TRUE NAVY');
        $SIZE = asignar(3,'3XL');
        $VENDOR = asignar(4,'BHW');
        $UPC = asignar(5,'885814415642');
        $DESCRIPTION = asignar(6,'SPLIT LEVELS TEE');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
       
        // Introducimos los datos
        
        texto('STYLE',20,30,0,0,$arial,$black,8,0,0);
        texto($STYLE,0,45,3,125,$arialNarrow,$black,8,0,0);
        
        texto('COLOR',80,30,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,45,1,0,$arialNarrow,$black,8,0,0);
        
        texto('SIZE',150,30,0,0,$arial,$black,8,0,0);
        texto($SIZE,0,45,3,-120,$arialNarrow,$black,8,0,0);
        
        texto('PRODUCT NAME:  '.$DESCRIPTION,5,65,0,0,$arialNarrow,$black,7,0,0);
        
        texto($VENDOR,0,108,3,140,$arialNarrowBold,$black,13,0,0);
        
        // Creacion del Barcode
        barcode($UPC,45,62,1.2,67,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
