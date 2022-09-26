<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'J7121YSUAL');
        $COLOR = asignar(2,'DIST BLACK');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'123456789104');
        $PRICE = asignar(5,'$19.99');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('STYLE',10,70,0,0,$arialNarrowBold,$black,7,0,0);
        texto($STYLE,10,85,0,0,$arialNarrowBold,$black,7,0,0);
        
        texto('COLOR',0,70,2,10,$arialNarrowBold,$black,7,0,0);
        texto($COLOR,0,85,2,10,$arialNarrowBold,$black,7,0,0);
        
        texto($UPC,0,170,1,0,$arialNarrowBold,$black,10,0,0);
        
        texto('SIZE: ',10,200,0,0,$arialNarrowBold,$black,9,0,0);
        texto($SIZE,40,200,0,0,$arialNarrowBold,$black,11,0,0);
        
        perforacion(150,325,275);
        
        texto($PRICE,0,305,1,0,$arialNarrowBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,95,1,60,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
