<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SOM045');
        $COLOR = asignar(2,'Navy Heater');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'654563522037');
        $PRICE = asignar(5,'26.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos

        texto($STYLE, 10, 80, 0, 0, $arial, $black, 7.5, 0, 0);

        texto($COLOR, 0, 80, 2, 5, $arial, $black, strlen($COLOR)>8?6.5:7.5, 0, 0);
        
        texto($SIZE,0,194,1,0,$arialBold,$black,15,0,0);
        
        texto(quitarDecimales($PRICE),0,285,1,0,$arial,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,14,77,1.2,75,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
