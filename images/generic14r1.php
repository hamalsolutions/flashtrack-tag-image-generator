<?php                      //    1           2         3           4          5       6        7
    $correctos = array('QTY', 'STYLE', 'STYLE NAME', 'COLOR', 'COLOR NAME', 'SIZE', 'UPC','LABEL_CODE');
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
        $LABEL_CODE = asignar(7,'LABEL CODE#');
            // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(12);
        
            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,15,27,0,0,$arialBold,$black,12,0,0);
        texto($STYLE_NAME, 15, 43, 0, 0, $arial, $black, 8, 0, 0);
        texto($COLOR,15,58,0,0,$arial,$black,9,0,0);
        texto($LABEL_CODE,15,72,0,0,$arial,$black,9,0,0);
        texto($COLOR_NAME, 15, 87, 0, 0, $arial, $black, 8, 0, 0);
        texto($SIZE,15,105,0,0,$arial,$black,9,0,0);
        // Creacion del Barcode
        barcode($UPC,25,95,1.2,80,'UPC');
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
