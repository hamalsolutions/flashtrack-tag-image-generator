<?php                     //   1       2       3      4      5        6      7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HTHR GRY');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'F4239-776');
        $UPC = asignar(4,'715209856739');
        $PRICE = asignar(5,'40.00');
        $DEPT = asignar(6,'696');  
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto($STYLE,0,63,2,10,$arialBold,$black,8,0,0);
        texto('STYLE',0,75,2,10,$arialNarrow,$black,6,0,0);
        
        texto($DEPT,12,63,0,0,$arialBold,$black,8,0,0);
        texto('DEPT.',12,75,0,0,$arialNarrow,$black,6,0,0);
        
        texto('VENDOR',0,75,1,0,$arialNarrow,$black,6,0,0);
        
        texto('Color: '.$COLOR,0,100,1,0,$arialBold,$black,7,0,0);
        
        texto('SIZE',0,125,1,0,$arialNarrowBold,$black,8,0,0);
        texto($SIZE,0,137,1,0,$arialBold,$black,8,0,0);
        
        cajaRellena(1,155,147,25,$vicsColor,$vicsColor);
        
        perforacion(150, 325, 295);
        
        texto($PRICE,0,320,1,0,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,11,175,1.1,83,'UPC');
        
        barcodeTexto(3,0,-3,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
