<?php                       //   1       2       3     4     5       6     7     
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','COMPARE PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'B3007JA-437');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'X-SMALL');
        $UPC = asignar(4,'881759010713');
        $PRICE = asignar(5,'58.00');
        $COMPAREPRICE = asignar(6,'120.00');
        $DEPT = asignar(7,'059');
        
        // Creacion del formato
        formato(125,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        
        // Introducimos los datos         
        agujero(63, 25);
        
        texto($STYLE,0,60,1,0,$arialBold,$black,10,0,0);
        
        texto($COLOR,0,90,2,5,$arialBold,$black,9,0,0);
        
        texto('Size:',10,170,0,0,$arialBold,$black,9,0,0);
        texto($SIZE,45,170,0,0,$arialBold,$black,10,0,0);
        
        texto($DEPT,10,195,0,0,$arial,$black,11,0,0);
        texto('Dept:',13,208,0,0,$arial,$black,10,0,0);
        
        texto('COMPARE AT',0,235,1,0,$arialBold,$black,11,0,0);
        
        texto($COMPAREPRICE,15,260,0,0,$arialBoldSlash,$black,9,0,1);
        
        texto(sinSigno($PRICE),0,260,2,7,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,98,1,45,'UPC');
        
        barcodeTexto(1,0,-7,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>