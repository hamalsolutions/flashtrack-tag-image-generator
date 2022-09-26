<?php                      //      1          2       3     4          5          6         7
    $correctos = array('QTY','DESCRIPTION','STYLE','SIZE','UPC','COMPARE PRICE','PRICE','RETAILER');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'FORD COBRA');
        $STYLE = asignar(2,'CBFO7083VF');
        $SIZE = asignar(3,'MEDIUM');
        $UPC = asignar(4,'716068422530');
        $COMPARE = asignar(5,'$24.00');
        $PRICE = asignar(6,'$12.00');
        $RETAILER = asignar(7,'LOGOTEL');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($RETAILER,0,28,1,0,$arialBold,$black,12,0,0);
        
        parrafo($DESCRIPTION,0,43,1,0,$arial,$black,9,0,12,11);
        
        texto('Style '.$STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,100,1,0,$arialBold,$black,14,0,0);
        
        texto(formatizarTexto('1     23456    78945      5',$UPC),0,190,1,0,$arial,$black,8.5,0,0);
        
        texto('Compare at:',10,205,0,0,$arial,$black,7,0,0);
        
        texto($COMPARE,40,223,0,0,$arial,$black,8,0,1);
        
        texto('You Pay:',10,239,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,30,265,0,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,-3,79,1.4,95,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
