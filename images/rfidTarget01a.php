<?php                      //  1      2       3       4      5       6      7      8        9
    $correctos = array('QTY','SIZE','COLOR','STYLE','DEPT','CLASS','ITEM','UPC','PRICE','EPC_HEX');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SMALL');
        $COLOR = asignar(2,'YELLOW');
        $STYLE = asignar(3,'12345678');
        $DEPT = asignar(4,'123');
        $CLASS = asignar(5,'12');
        $ITEM = asignar(6,'1234');
        $UPC = asignar(7,'63985858483');
        $PRICE = asignar(8,'$10.00');
        $EPCHEX = asignar(9,'');

        // Creacion del formato rfidTarget01b, the stock size is: 2.50"x1.50"
        formato(150,250,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $lgray = color(200,200,200);
            // Fuentes a usar
        $timesNewBold = fuente('timesbd.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);

        texto('*2021',10,15,0,0,$arialBold,$lgray,6,0,0);
        texto('E',0,48,2,7,$logo,$black,27,0,0);
        
        texto('SIZE',0,56,1,0,$timesNewBold,$black,7,0,0);
        
        texto($SIZE,0,70,1,0,$timesNewBold,$black,10,0,0);
        
        texto($COLOR,10,88,0,0,$timesNewBold,$black,7,0,0);
        
        texto('STYLE '.$STYLE,10,103,0,0,$timesNewBold,$black,7,0,0);
        
        texto($DEPT,16,120,0,0,$timesNewBold,$black,7,0,0);
 
        texto($CLASS,0,120,1,0,$timesNewBold,$black,7,0,0);
        
        texto($ITEM,0,120,2,14,$timesNewBold,$black,7,0,0);

        texto('DEPT             CL             ITEM',0,135,1,0,$timesNewBold,$black,7,0,0);
        
        texto($PRICE,0,236,2,12,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,145,1,30,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
