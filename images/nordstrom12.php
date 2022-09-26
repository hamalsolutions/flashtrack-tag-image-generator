<?php                       //   1       2       3     4     5       6     7       8
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','RACK','DEPT','SEASON');
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
        $SEASON = asignar(8,'012');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        $logo = fuente('NordstromRackLogo.ttf');
        
        // Introducimos los datos         
        
        texto('N',0,25,1,0,$logo,$black,17,0,0);
        
        texto($STYLE,10,105,0,0,$arialBold,$black,8,0,0);
        
        texto($COLOR,10,116,0,0,$arialBold,$black,8,0,0);
        
        texto($SIZE,10,126,0,0,$arialBold,$black,8,0,0);
        
        texto($DEPT,0,82,3,95,$arial,$black,8,0,0);
        texto('Dept',17,92,0,0,$arial,$black,8,0,0);
        
        texto($SEASON,0,82,3,-80,$arial,$black,8,0,0);
        texto('Season',100,92,0,0,$arial,$black,8,0,0);
        
        texto('COMPARE AT',10,136,0,0,$arial,$black,6,0,0);
        
        texto($PRICE,15,147,0,0,$arialBoldSlash,$black,8,0,1);
        
        texto($RACK,0,143,2,7,$arialBold,$black,11,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,26,1.2,40,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>