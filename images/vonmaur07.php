<?php                     //      1         2     3     4       5
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'KT1950K0C25');
        $COLOR = asignar(2,'BLACK');
        $UPC = asignar(3,'19017223521');
        $SIZE = asignar(4,'S');
        $DEPT = asignar(5,'062');
        $PRICE = asignar(6, '32.00');

        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialNBold = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos

        agujero(85,25);


        texto($STYLE,10,65,0,0,$arialBold,$black,9,0,0);
        texto($COLOR,10,80,0,0,$arialBold,$black,9,0,0);
        
        texto('Size  '.$SIZE,20,210,0,0,$arialNBold,$black,11,0,0);
        texto('Dept:  '.$DEPT,20,230,0,0,$arialNBold,$black,11,0,0);

        perforacion(169,300,260);
        texto('MSRP',12,289,0,0,$arialNBold,$black,11,0,0);
        texto(sinSigno($PRICE),0,290,2,20,$arialBold,$black,13,0,1);
        
            // Creacion del Barcode
        barcode($UPC,8,84,1.3,75,'UPC');

        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
