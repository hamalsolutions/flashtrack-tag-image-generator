<?php                    //    1        2       3     4    
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'JL2324JDY2644');
        $COLOR = asignar(2,'MINT');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'888823317969');
        
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $times = fuente('times.ttf');
        $timesBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        texto('STYLE#:'.$STYLE,8,150,0,0,$times,$black,9,0,0);
        
        texto('COLOR: '.$COLOR, 8, 170, 0, 0, $times, $black, 9, 0, 15, 12);
        
        texto('SIZE   '.$SIZE,0,233,1,0,$timesBold,$black,14,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,50,1,55,'UPC');
        
        barcodeTexto(2,0,1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
