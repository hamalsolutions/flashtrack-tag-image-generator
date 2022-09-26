<?php                      //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2639');
        $COLOR = asignar(2,'Kelly Heater');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$12.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,65,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,65,2,5,$arial,$black,8,0,0);
        
        //textoParrafo2($COLOR,50,82,$arial,$black,8,0,22,13);
        
        texto('SIZE',17,193,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,47,203,0,0,$arialBold,$black,15,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arialBold,$black,10,0,0);
        
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        if ($PRICE=='6'||$PRICE=='8'||$PRICE=='10'||$PRICE=='12'||$PRICE=='15'||$PRICE=='20'||$PRICE=='25'||$PRICE=='30'){
            cajaRellena(45,266,75,22,$red,$black);
            $start = texto($PRICE,0,285,1,0,$arial,$white,14,0,0);
            texto('$',$start-6,280,0,0,$arial,$white,10,0,0);
        }
        
        // Creacion del Barcode
        barcode($UPC,10,70,1.3,85,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
