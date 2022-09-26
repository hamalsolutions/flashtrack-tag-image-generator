<?php                      //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SOM045');
        $COLOR = asignar(2,'Navy Heater');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'654563522037');
        $PRICE = asignar(5,'$20.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(84, 25);
        
        texto($STYLE,10,80,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,80,2,5,$arial,$black,8,0,0);
        
        texto($SIZE,0,194,1,0,$arialBold,$black,15,0,0);
        
        perforacion();
        
        $PRICE = str_replace('.00','',sinSigno($PRICE));
        
        $start = texto($PRICE,0,285,1,0,$arial,$black,14,0,0);
        texto('$',$start-6,280,0,0,$arial,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,14,77,1.2,75,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
