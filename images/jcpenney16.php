<?php                      //   1       2       3       4      5     6     
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','VENDOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'4JH93470J');
        $UPC = asignar(4,'704386275464');
        $PRICE = asignar(5,'$12.00');
        $VENDOR = asignar(6,'19399-5');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        
        texto('SIZE',30,55,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,70,3,80,$arialBold,$black,12,0,0);
        
        texto($COLOR,0,55,2,5,$arialBold,$black,9,0,0);
        
        texto('SUPP',100,70,0,0,$arial,$black,7,0,0);
        
        texto($VENDOR,0,70,2,5,$arial,$black,7,0,0);
        
        texto('STYLE',0,110,1,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,0,125,1,0,$arialBold,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);
        
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        if ($PRICE=='12' || $PRICE=='10'){
            cajaRellena(45,266,75,22,$red,$black);
            $start = texto($PRICE,0,285,1,0,$arial,$white,14,0,0);
            texto('$',$start-6,280,0,0,$arial,$white,10,0,0);
        }
        
        // Creacion del Barcode
        barcode($UPC,13,110,1.2,85,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
