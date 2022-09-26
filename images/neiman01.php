<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'1WRD');
        $UPC = asignar(4,'885347077119');
        $DESCRIPTION = asignar(5,'CLASSIC LEGGINGS');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $times = fuente('times.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto($DESCRIPTION,0,45,1,0,$times,$black,8,0,0);
        
        if (strlen($COLOR)<13) {
            texto($COLOR,0,75,2,10,$arial,$black,8,0,0);
            texto($STYLE,10,75,0,0,$arial,$black,8,0,0);
        } else {
            texto($COLOR,0,75,2,5,$arial,$black,7,0,0);
            texto($STYLE,10,75,0,0,$arial,$black,7,0,0);
        }
        
        texto('SIZE',20,220,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,50,220,0,0,$arialBold,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,7,75,1.2,90,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
