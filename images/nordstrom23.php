<?php                       //   1       2       3     4     5       6     7     
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE-L','PRICE-H','DEPT','SAVINGS');
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
        $SAVINGS = asignar(8,'22% SAVING');
        
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
        agujero(85, 25);
        
        texto('n',0,60,1,0,$logo,$black,22,0,0);
        
        texto($STYLE,20,95,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,112,2,15,$arial,$black,10,0,0);
        
        texto('Dept: '.$DEPT,20,190,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,20,210,0,0,$arial,$black,14,0,0);
        
        texto('COMPARE AT',15,260,0,0,$arialNarrow,$black,8,0,0);
        texto(sinSigno($RACK),0,260,2,8,$arialBoldSlash,$black,12,0,0);
        
        texto($SAVINGS,15,282,0,0,$arialNarrow,$black,8,0,0);
        texto(sinSigno($PRICE),0,282,2,10,$arialBold,$black,14,0,0);
        
        // Creacion del Barcode
        barcode($UPC,13,98,1.2,65,'UPC');
        
        barcodeTexto(1,0,-7,8,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>