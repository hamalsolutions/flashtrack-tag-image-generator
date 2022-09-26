<?php                      //      1          2       3     4          5          6         7
    $correctos = array('QTY','STYLE','SIZE','UPC','COMPARE PRICE','PRICE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2429BMVX');
        $SIZE = asignar(2,'S');
        $UPC = asignar(3,'716068422530');
        $COMPARE = asignar(4,'$36.00');
        $PRICE = asignar(5,'$18.00');
        $COLOR = asignar(6,'BLACK');
        
            // Creacion del formato
        formato(150,250,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,0,50,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,68,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,85,1,0,$arialBold,$black,10,0,0);
        
        texto(formatizarTexto('1     23456    78945      5',$UPC),0,165,1,0,$arial,$black,8.5,0,0);
        
        texto('Compare at:',10,180,0,0,$arial,$black,7,0,0);
        
        texto($COMPARE,40,198,0,0,$arial,$black,8,0,1);
        
        texto('You Pay:',10,214,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,30,238,0,0,$arialBold,$black,11,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,1,70,1.3,80,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
