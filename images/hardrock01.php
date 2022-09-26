<?php                      //   1      2       3      4        5          6   
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'WRD-039');
        $UPC = asignar(4,'61234567');
        $DESCRIPTION = asignar(5,'PEACE AND LOVE');
        $PRICE = asignar(6,'46.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        $fontSize = strlen($DESCRIPTION)>15?9:12;
        
        texto($DESCRIPTION,0,87,1,0,$arial,$black,$fontSize,0,0);
        
        texto('STYLE '.$STYLE,0,107,1,0,$arial,$black,10,0,0);
        
        texto('COLOR '.$COLOR,0,125,1,0,$arial,$black,10,0,0);
        
        texto('SIZE '.$SIZE,0,145,1,0,$arial,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,277,1,0,$arial,$black,12,0,-1);
        
        
        // Creacion del Barcode
        barcode($UPC,25,125,1.3,105,'128');
        
        barcodeTexto(2,5,-2,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
