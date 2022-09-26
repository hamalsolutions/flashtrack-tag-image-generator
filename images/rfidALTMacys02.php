<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','RETAIL');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'LED SNOWFLAKE RUSH');
        $COLOR = asignar(2,'TH-WHITE/RED');
        $SIZE = asignar(3,'50X60');
        $UPC = asignar(4,'194938026345');
        $RETAIL = asignar(5,'60.00');
            // Creacion del formato
        formato(213,137,255,255,255);
        setAsSticker (12);        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBD = fuente('arialbd.ttf');
        $arialN = fuente('arialn.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        texto('E',0,30,2,12,$logo,$black,22,0,0);
        texto($RETAIL,0,30,1,0,$arialBD,$black,16,0,1);

        if (strlen($STYLE) < 29) {
            texto($STYLE,0,48,1,0,$arial,$black,8,0,0);
        } else {
            texto($STYLE,0,48,1,0,$arialN,$black,8,0,0);
        }

        $COLRSIZE = $COLOR.' - '.$SIZE;
        if (strlen($COLRSIZE) < 29) {
            texto($COLRSIZE,0,64,1,0,$arial,$black,8,0,0);
        } else {
            texto($COLRSIZE,0,64,1,0,$arialN,$black,8,0,0);
        }

        barcode($UPC,30,60,1.2,60,'UPC');

        barcodeTexto(3,-1,-1,5,'OCR-B_SB.ttf');

        require_once('../includes/footer.php');
    }
?>
