<?php                    //     1       2       3       4     5      6       7 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SM2U9709');
        $COLOR = asignar(2,'020 GRAY');
        $SIZE = asignar(3,'32X32');
        $UPC = asignar(4,'883850596387');
        $PRICE = asignar(5,'22.99');
        
        // Creacion del formato
        formato(175,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        $logo = fuente('KennethCole_Logo.ttf');
        // Introducimos los datos
                
        agujero(87, 25);
        
        texto('K',0,70,1,0,$logo,$black,21,0,0);
        
        texto('STYLE '.$STYLE,10,100,0,0,$arial,$black,6,0,0);
        texto('COLOR '.$COLOR,10,110,0,0,$arial,$black,6,0,0);
        
        texto('kennethcole.com',0,150,1,0,$arial,$black,6.5,0,0);
        texto('01-800-KEN-COLE',0,163,1,0,$arial,$black,7,0,0);
        
        texto('SIZE: ',50,293,0,0,$arialBold,$black,7,0,0);
        texto($SIZE,0,295,2,10,$arialBold,$black,18,0,0);
        
        perforacion(175, 400, 353);
        
        texto("MANUFACTURE'S",10,368,0,0,$arialNarrowBold,$black,7,0,0);
        texto('SUGGESTED',10,378,0,0,$arialNarrowBold,$black,7,0,0);
        texto('RETAIL PRICE',10,389,0,0,$arialNarrowBold,$black,7,0,0);
        
        texto($PRICE,0,383,2,10,$arialBold,$black,17,0,1);
        
        // Creacion del Barcode
        barcode($UPC,23,155,1.1,95,'UPC');
        
        barcodeTexto(1,0,0,2,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
