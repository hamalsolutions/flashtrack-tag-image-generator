<?php                     //   1       2       3      4     5       6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESC1','DESC2');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'439 BLOOD RED');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'723-2276');
        $UPC = asignar(4,'634741663370');
        $DESC1 = asignar(5,'SMOKE 2');
        $DESC2 = asignar(6,'TEE S11 SS');
        
            // Creacion del formato
        formato(125,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        
        imagefilledellipse($img,63,25,12,12,$transparent);
        imageellipse($img,63,25,12,12,$gray);
        
           //Introducimos los datos
        texto($STYLE,10,105,0,0,$arial,$black,8,0,0);
        
        texto($DESC1,10,123,0,0,(strlen($DESC1)>16)?$arialNarrow:$arial,$black,7,0,0);
        
        texto($DESC2,10,140,0,0,(strlen($DESC2)>16)?$arialNarrow:$arial,$black,7,0,0);
        
        texto($COLOR,10,158,0,0,(strlen($COLOR)>16)?$arialNarrow:$arial,$black,(strlen($campo[1])>16)?7:8,0,0);
        
        texto($SIZE,10,176,0,0,$arial,$black,8,0,0);
        
        texto('-- - - - - - - - - - - - - --',0,295,1,0,$arialBold,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,230,1,40,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
