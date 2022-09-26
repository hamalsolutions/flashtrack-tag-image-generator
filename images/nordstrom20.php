<?php                      //  1     2      3       4       5       6           7
    $correctos = array('QTY','UPC','DEPT','SIZE','COLOR','STYLE','PRICE','COMPARE PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'881759000004');
        $DEPT = asignar(2,'059');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'GREY');
        $STYLE = asignar(5,'B3007JA-437');
        $PRICE = asignar(6,'39.97');
        $COMPARE = asignar(7,'119.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arial = fuente('arial.ttf');
        $logo = fuente('Nordstrom_Logo.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        // Introducimos los datos
        
        texto('N',10,45,0,0,$logo,$black,20,0,0);
        texto('rack',0,45,2,30,$arial,$black,12.5,0,0);
        
        texto($STYLE,10,65,0,0,$arialBold,$black,11,0,0);
        
        texto($COLOR,10,80,0,0,$arialBold,$black,11,0,0);
        
        texto('DEPT:',10,180,0,0,$arialBold,$black,12,0,0);
        texto($DEPT,61,180,0,0,$arialBold,$black,12,0,0);
        
        texto($SIZE,10,202,0,0,$arialBold,$black,12,0,0);
        
        $porcentaje = 100-($PRICE * 100)/$COMPARE;
        texto('COMPARE AT',10,270,0,0,$arialBold,$black,8.5,0,0);
        texto(round($porcentaje, 0).'% Savings',10,285,0,0,$arialBold,$black,9,0,0);
        
        texto($COMPARE,0,270,2,10,$arialBoldSlash,$black,12,0,1);
        texto($PRICE,0,290,2,10,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,85,1.2,60,'UPC');
        
        barcodeTexto(1,0,0,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
