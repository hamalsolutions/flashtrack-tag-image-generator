<?php                      //   1      2       3      4     5
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'ELW1088');
        $UPC = asignar(4,'885008024216');
        $PRICE = asignar(5,'85.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        imagerectangle($img,4,57,FORMAT_WIDTH-5,58,$black);
        
        texto('STYLE   '.$STYLE,0,80,1,0,$arial,$black,10,0,0);
        
        imagerectangle($img,4,93,FORMAT_WIDTH-5,94,$black);
        
        
        imagerectangle($img,4,173,FORMAT_WIDTH-5,174,$black);
        
        texto('COLOR / SIZE',0,192,1,0,$arial,$black,6,0,0);
        
        texto($COLOR,0,215,1,0,$arialBold,$black,9.5,0,0);
        
        texto($SIZE,0,240,1,0,$arial,$black,15,0,0);
        
        perforacion();
        
        texto($PRICE,0,289,1,0,$arial,$black,15,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,25,105,1,50,'UPC');
        
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
