<?php                      //   1      2       3       4       5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','STYLE#','UPC','CLASS','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'X-LARGE');
        $STYLE = asignar(3,'1WRD');
        $STYLE_NUM = asignar(4,'1546B2');
        $UPC = asignar(5,'885347077119');
        $CLASS = asignar(6,'467');
        $DEPT = asignar(7,'1074');
        $PRICE = asignar(8,'7.99');
                
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('DEPT',20,70,0,0,$arial,$black,8,0,0);
        texto($DEPT,52,70,0,0,$arial,$black,8,0,0);
        
        texto('CL '.$CLASS,0,70,2,15,$arial,$black,8,0,0);
        
        texto($STYLE,25,120,0,0,$arial,$black,8,0,0);
        
        texto($STYLE_NUM,0,120,2,18,$arial,$black,8,0,0);
        
        texto('COLOR',15,218,0,0,$arial,$black,9,0,0);
        texto($COLOR,65,218,0,0,$arialBold,$black,8,0,0);
        
        texto('SIZE',15,238,0,0,$arial,$black,9,0,0);
        texto($SIZE,47,238,0,0,$arialBold,$black,8,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,17,0,1);
        
        
          // Creacion del Barcode
        barcode($UPC,15,105,1.2,65,'UPC');
        
        barcodeTexto(2,0,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
