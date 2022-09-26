<?php                      //   1      2         3           4            5        6      7
    $correctos = array('QTY', 'STYLE', 'STYLE NAME', 'COLOR', 'COLOR NAME', 'SIZE', 'UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato

        $STYLE = asignar(1,'MT5635');
        $STYLE_NAME = asignar(2,'LS RIB ARM FUZZI');
        $COLOR = asignar(3,'X03');
        $COLOR_NAME = asignar(4,'K0059 MAUVE');
        $SIZE = asignar(5,'XS');
        $UPC = asignar(6,'190172159726');
        
            // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
                
        texto($STYLE,15,30,0,0,$arialBold,$black,12,0,0);

        texto($STYLE_NAME,15,45,0,0,$arial,$black,8,0,0);
        texto($COLOR,15,60,0,0,$arial,$black,9,0,0);
        texto($COLOR_NAME,15,75,0,0,$arial,$black,8,0,0);
        texto($SIZE,15,90,0,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,25,80,1.2,90,'UPC');
        
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
