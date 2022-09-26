<?php                      //  1      2       3       4      5       6      7     8
    $correctos = array('QTY','SIZE','COLOR','STYLE','DEPT','CLASS','ITEM','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SMALL');
        $COLOR = asignar(2,'RED');
        $STYLE = asignar(3,'XXXXXXX8');
        $DEPT = asignar(4,'000');
        $CLASS = asignar(5,'00');
        $ITEM = asignar(6,'0000');
        $UPC = asignar(7,'63985858483');
        $PRICE = asignar(8,'$10.00');
        
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $timesNewBold = fuente('timesbd.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',0,48,2,7,$logo,$black,27,0,0);
        
        texto('SIZE',0,68,1,0,$timesNewBold,$black,7,0,0);
        
        texto($SIZE,0,83,1,0,$timesNewBold,$black,10,0,0);
        
        texto($COLOR,10,108,0,0,$timesNewBold,$black,7,0,0);
        
        texto('STYLE '.$STYLE,10,123,0,0,$timesNewBold,$black,7,0,0);
        
        texto($DEPT,16,150,0,0,$timesNewBold,$black,7,0,0);
 
        texto($CLASS,0,150,1,0,$timesNewBold,$black,7,0,0);
        
        texto($ITEM,0,150,2,14,$timesNewBold,$black,7,0,0);

        texto(' DEPT            CL             ITEM',0,165,1,0,$arialBold,$black,7,0,0);
        
        texto($PRICE,0,305,2,12,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,185,1,40,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
