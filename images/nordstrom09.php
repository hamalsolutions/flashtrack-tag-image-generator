<?php                       //   1       2       3     4     5       6     7     
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','RACK','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'B3007JA-437');
        $COLOR = asignar(2,'GREY');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'881759010713');
        $PRICE = asignar(5,'120.00');
        $RACK = asignar(6,'58.00');
        $DEPT = asignar(7,'059');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        $logo = fuente('NordstromRackLogo.ttf');
        
        // Introducimos los datos         
        
        texto('N',0,75,1,0,$logo,$black,17,0,0);
        
        texto($STYLE,0,95,1,0,$arialBold,$black,11,0,0);
        
        texto($COLOR,0,112,2,15,$arialBold,$black,10.5,0,0);
        
        texto('Size:',20,185,0,0,$arial,$black,11,0,0);
        
        texto($SIZE,65,185,0,0,$arial,$black,12,0,0);
        
        texto($DEPT,0,205,3,95,$arial,$black,10,0,0);
        texto('Dept',20,220,0,0,$arial,$black,11,0,0);
        
        texto('COMPARE AT',0,255,1,0,$arial,$black,11,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - - - - - - - - --',0,270,1,0,$arial,$black,7,0,0);
        
        texto($PRICE,15,292,0,0,$arialBoldSlash,$black,11,0,1);
        
        texto($RACK,0,292,2,7,$arialBold,$black,11,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,98,1.2,55,'UPC');
        
        barcodeTexto(1,0,-7,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>