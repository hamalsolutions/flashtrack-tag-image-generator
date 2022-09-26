<?php                      //      1          2       3       4      5       6       7
    $correctos = array('QTY','UPC','STYLE NAME','COLOR','COLOR CODE','SIZE','STYLE','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $UPC = asignar(1,'885930149209');
        $STYLE_NAME = asignar(2,'GB5BW100');
        $COLOR = asignar(3,'FRENCH NAVY/CREAM');
        $COLORCODE = asignar(4,'87S');
        $SIZE = asignar(5,'S');
        $STYLE = asignar(6,'TECH WINDCHEATER');
        $PRICE = asignar(7,'95.00');
                       
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,15,0,0,$arial,$black,7,0,0);
        
        texto('COLOR:',10,84,0,0,$arial,$black,7,0,0);
        texto($COLOR,49,84,0,0,$arial,$black,7,0,0);
        
        texto('STYLE:',10,95,0,0,$arial,$black,7,0,0);
        texto($STYLE_NAME,45,95,0,0,$arial,$black,7,0,0);
        texto($COLORCODE,112,95,0,0,$arial,$black,7,0,0);
        texto('SIZE:',140,95,0,0,$arial,$black,7,0,0);
        texto($SIZE,165,95,0,0,$arial,$black,7,0,0);
        
        texto($PRICE,0,190,1,0,$arial,$black,9,90,1);
        
        // Creacion del Barcode
        barcode($UPC,22,15,1.2,47,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
