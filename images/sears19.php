<?php                     //     1            2     3     4       5       6       7     8     9       10          
    $correctos = array('QTY','CATEGORY','DESCRIPTION','DIVISION','ITEM','SKU','LINE','CLASS','SEASON','UPC','KSN','SIZE','PRICE','GROUP NAME','RACK','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $CATEGORY = asignar(1,'YOUNG MENS');
        $DESCRIPTION = asignar(2,'SCREEN TEES');
        $DIVISION = asignar(3,'43');
        $ITEM = asignar(4,'89109');
        $SKU = asignar(5,'2');
        $LINE = asignar(6,'1');
        $CLASS = asignar(7,'84');
        $SEASON = asignar(8,'C4');
        $UPC = asignar(9,'886349328735');
        $KSN = asignar(10,'07385214-7');
        $SIZE = asignar(11,'SMALL');
        $PRICE = asignar(12,'20.00');
        $GROUPNAME = asignar(13,'LICENSE'); 
        $RACK = asignar(14,'TABLE');
        $COLOR = asignar(15,'ROYAL');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar.
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Sears_Logo_2011.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $soloLogos = fuente('solo_logos2.ttf');
        
        // Introducimos los datos
        
        texto('S5603U-HT-1',10,25,0,0,$arial,$black,6,270,0);
        
        texto('S',75,20,0,0,$logo,$black,7,270,0);
        texto('sears.com',75,30,0,0,$arial,$black,5,270,0);
        
        texto('D',213,115,0,0,$soloLogos,$black,17,0,0);
        texto('PAPER CONTAINS A MINIMUM',236,105,0,0,$arialNarrow,$black,5,0,0);
        texto('OF 46% RECYCLED CONTENT',236,115,0,0,$arialNarrow,$black,5,0,0);
        
        texto($CATEGORY,7,60,0,0,$arialNarrowBold,$black,8,270,0);
        texto($GROUPNAME,7,70,0,0,$arialNarrow,$black,7,270,0);
        texto($DESCRIPTION,7,80,0,0,$arialNarrow,$black,7,270,0);
        texto($COLOR,7,90,0,0,$arialNarrow,$black,7,270,0);
        
        
        
        texto('KSN#',7,112,0,0,$arial,$black,7,270,0);
        texto($KSN,35,112,0,0,$arial,$black,7,270,0);
        texto($RACK,7,122,0,0,$arial,$black,6,270,0);
        
        texto($SEASON,7,142,0,0,$arial,$black,7,270,0);
        
        texto('D',7,161,0,0,$arial,$black,7,270,0);
        $DIVISION = substr($DIVISION,0,1) == 'D'?substr($DIVISION,1):$DIVISION;
        texto($DIVISION,15,161,0,0,$arial,$black,7,270,0);
        
        texto('M',7,171,0,0,$arial,$black,7,270,0);
        $ITEM = substr($ITEM,0,1) == 'M'?substr($ITEM,1):$ITEM;
        texto($ITEM,15,171,0,0,$arial,$black,7.5,270,0);
        
        texto(str_pad($SKU, 3, '0', STR_PAD_LEFT),7,181,0,0,$arial,$black,7,270,0);
        
        texto('Line',7,191,0,0,$arial,$black,7,270,0);
        texto(str_pad($LINE, 2, '0', STR_PAD_LEFT),30,191,0,0,$arial,$black,7,270,0);
        
        texto('CLS',7,201,0,0,$arial,$black,7,270,0);
        texto(str_pad($CLASS, 3, '0', STR_PAD_LEFT),30,201,0,0,$arial,$black,7,270,0);
        
        texto($SIZE,0,260,1,0,$arial,$black,9,270,0);
        texto('MEMBERS EARN POINTS',0,278,1,0,$arialNarrowBold,$black,8,270,0);
        texto('JOIN FOR FREE',0,295,1,0,$arialNarrowBold,$black,13,270,0);
        texto('SHOPYOURWAY.COM',0,308,1,0,$arialNarrowBold,$black,9,270,0);
        
        texto($PRICE,0,337,1,0,$arialBold,$black,14,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,70,255,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
