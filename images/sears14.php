<?php                      //    1          2           3           4      5        6       7      8      9     10      11      12    13
    $correctos = array('QTY','PROD-ID','RACK','DESCRIPTION','SEASON','KSN','DIVISION','ITEM','SKU','LINE','CLASS','SIZE','PRICE','UPC','COLOR','LICENSE','PROD-CAT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PROD_ID = asignar(1,'PROD-ID');
        $RACK = asignar(2,'TABLE');
        $DESCRIPTION = asignar(3,'MINECRAFT LINEUP');
        $SEASON = asignar(4,'C13');
        $KSN = asignar(5,'04920675-8');
        $DIVISION = asignar(6,'34');
        $ITEM = asignar(7,'M42645');
        $SKU = asignar(8,'047');
        $LINE = asignar(9,'018');
        $CLASS = asignar(10,'172');
        $SIZE = asignar(11,'SIZE');
        $PRICE = asignar(12,'$58.00');
        $UPC = asignar(13,'845550574478');
        $COLOR = asignar(14,'WHITE');
        $LICENSE = asignar(15,'LICENSE');
        $PROD_CAT = asignar(16,'BOYS');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Sears_Logo_2011.ttf');
        
        // Introducimos los datos
        
        imageellipse($img,325,60,15,15,$gray);
        
        texto($PROD_ID,7,30,0,0,$arial,$black,6,270,0);
        
        texto('S',80,30,0,0,$logo,$black,8,270,0);
        texto('sears.com',81,36,0,0,$arial,$black,6,270,0);
        
        texto($PROD_CAT,7,65,0,0,$arialBold,$black,8,270,0);
        
        texto($LICENSE,7,75,0,0,$arial,$black,6.5,270,0);
        
        texto($DESCRIPTION,7,85,0,0,$arialNarrow,$black,7,270,0);
        
        texto($COLOR,7,95,0,0,$arial,$black,6.5,270,0);
        
        texto('KSN#',7,120,0,0,$arial,$black,7,270,0);
        texto($KSN,35,120,0,0,$arial,$black,7,270,0);
        
        texto($RACK,7,130,0,0,$arial,$black,6.5,270,0);
        
        texto($SEASON,7,150,0,0,$arial,$black,7,270,0);
        
        texto('D',7,178,0,0,$arial,$black,7,270,0);
        $DIVISION = substr($DIVISION,0,1) == 'D'?substr($DIVISION,1):$DIVISION;
        texto($DIVISION,15,178,0,0,$arial,$black,7,270,0);
        
        texto('M',7,189,0,0,$arial,$black,7,270,0);
        $ITEM = substr($ITEM,0,1) == 'M'?substr($ITEM,1):$ITEM;
        texto($ITEM,15,189,0,0,$arial,$black,7,270,0);
        
        texto($SKU,7,200,0,0,$arial,$black,7,270,0);
        
        texto('Line',7,210,0,0,$arial,$black,7,270,0);
        texto($LINE,30,210,0,0,$arial,$black,7,270,0);
        
        texto('CLS',7,222,0,0,$arial,$black,7,270,0);
        texto($CLASS,30,222,0,0,$arial,$black,7,270,0);
        
        texto($SIZE,0,288,1,0,$arial,$black,14,270,0);
        
        texto('-- - - - - - - - - - - - - --',0,310,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,337,1,0,$arialBold,$black,14,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,60,280,1.2,45,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
