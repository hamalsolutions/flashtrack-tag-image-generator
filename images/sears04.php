<?php                      //    1          2           3           4      5        6       7      8      9     10      11      12    13
    $correctos = array('QTY','PROD-ID','PROD-CAT','DESCRIPTION','SEASON','KSN','DIVISION','ITEM','SKU','LINE','CLASS','SIZE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PROD_ID = asignar(1,'S1028G-HT1');
        $PROD_CAT = asignar(2,'TS143029S');
        $DESCRIPTION = asignar(3,'LS GRAPHICS WOVEN');
        $SEASON = asignar(4,'H8');
        $KSN = asignar(5,'01236548-9');
        $DIVISION = asignar(6,'41');
        $ITEM = asignar(7,'M12345');
        $SKU = asignar(8,'003');
        $LINE = asignar(9,'01');
        $CLASS = asignar(10,'084');
        $SIZE = asignar(11,'SMALL');
        $PRICE = asignar(12,'$58.00');
        $UPC = asignar(13,'845550574478');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('SearsLogo.ttf');
        
        // Introducimos los datos
        
        texto($PROD_ID,10,25,0,0,$arial,$black,6,270,0);
        
        texto($PROD_CAT,10,40,0,0,$arial,$black,6,270,0);
        
        texto('A',75,50,0,0,$logo,$black,10,270,0);
        texto('www.sears.com',65,55,0,0,$arial,$black,5,270,0);
        
        texto($DESCRIPTION,7,70,0,0,$arialBold,$black,7,270,0);
        
        texto($SEASON,7,100,0,0,$arial,$black,7,270,0);
        
        texto('KSN#',7,122,0,0,$arial,$black,7,270,0);
        texto($KSN,35,122,0,0,$arial,$black,7,270,0);
        
        texto('D',7,141,0,0,$arial,$black,7,270,0);
        $DIVISION = substr($DIVISION,0,1) == 'D'?substr($DIVISION,1):$DIVISION;
        texto($DIVISION,15,141,0,0,$arial,$black,7,270,0);
        
        texto('M',7,161,0,0,$arial,$black,7,270,0);
        $ITEM = substr($ITEM,0,1) == 'M'?substr($ITEM,1):$ITEM;
        texto($ITEM,15,161,0,0,$arial,$black,7,270,0);
        
        texto($SKU,7,180,0,0,$arial,$black,7,270,0);
        
        texto('Line',7,200,0,0,$arial,$black,7,270,0);
        texto($LINE,30,200,0,0,$arial,$black,7,270,0);
        
        texto('CLS',7,222,0,0,$arial,$black,7,270,0);
        texto($CLASS,30,222,0,0,$arial,$black,7,270,0);
        
        texto($SIZE,0,268,1,0,$arial,$black,14,270,0);
        
        texto($PRICE,0,337,1,0,$arialBold,$black,14,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,70,235,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
