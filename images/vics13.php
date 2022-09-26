<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'12345');
        $UPC = asignar(4,'000123456784');
        $PRICE = asignar(5,'25.99');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('vicsLogos.ttf');
        
        // Introducimos los datos
        
        texto('S',0,95,1,0,$logo,$black,85,0,0);
        
        texto($STYLE,9,129,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,129,2,5,$arialNarrow,$black,8,0,0);
        
        cajaRellena(1,235,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,257,1,0,$arialBold,$black,19,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,369,1,0,$arial,$black,10,0,0);
        
        texto('MSRP',5,390,0,0,$arialBold,$black,15,0,0);
        texto($PRICE,0,390,2,5,$arialBold,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,11,123,1.1,90,'UPC');
        
        barcodeTexto(3,0,-2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
