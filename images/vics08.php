<?php                     //   1       2       3      4      5        6      7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','VENDOR','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'GRAY');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'M1676');
        $UPC = asignar(4,'808295151021');
        $PRICE = asignar(5,'32.00');
        $VENDOR = asignar(6,'133512');
        $DEPT = asignar(7,'975');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($VENDOR,0,73,3,-70,$arial,$black,9,0,0);
        texto('VENDOR',85,85,0,0,$arial,$black,9,0,0);
        
        texto($DEPT,0,73,3,100,$arial,$black,9,0,0);
        texto('DEPT.',10,85,0,0,$arial,$black,9,0,0);
        
        texto('STYLE NO:',8,103,0,0,$arial,$black,8.5,0,0);
        texto($STYLE,78,103,0,0,$arial,$black,8.5,0,0);
        
        texto('COLOR:',20,118,0,0,$arial,$black,9,0,0);
        texto($COLOR,75,118,0,0,$arial,$black,9,0,0);
        
        texto('Size:',0,132,1,0,$arial,$black,10,0,0);
        texto($SIZE,0,147,1,0,$arial,$black,10,0,0);
        
        cajaRellena(1,160,147,25,$vicsColor,$vicsColor);
        
        texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,305,1,0,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,182,1.1,77,'UPC');
        
        barcodeTexto(2,0,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
