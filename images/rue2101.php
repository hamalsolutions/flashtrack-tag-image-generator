<?php                      //   1      2       3      4      5       6          7           8           9            10
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','CLASS','VENDOR STYLE','VENDOR','COMPARE PRICE','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'040');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'2611');
        $UPC = asignar(4,'400146232844');
        $PRICE = asignar(5,'19.99');
        $CLASS = asignar(6,'0251');
        $VENDORSTYLE = asignar(7,'RS261');
        $VENDOR = asignar(8,'01215');
        $COMPAREPRICE = asignar(9,'40.00');
        $SEASON = asignar(10,'S');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');  
        $letterGothic = fuente('lettergothic.otf');
        $letterGothicBold = fuente('lettergothicb.otf');
        
        // Introducimos los datos
        
        cajaRellena(1,1,147,58,$black,$black);
        imagefilledellipse($img,75,26,10,10,$transparent);
        imageellipse($img,75,26,10,10,$gray);
        //texto('*',0,31,1,0,$letterGothicBold,$black,7,0,0);
        
        texto('rue',25,50,0,0,$letterGothicBold,$white,23,0,0);
        texto('21',80,50,0,0,$letterGothic,$white,26,0,0);
        texto('.',110,50,0,0,$letterGothicBold,$white,23,0,0);
        
        cajaRellena(1,63,147,1,$black,$black);
        
        cajaRellena(1,66,147,9,$black,$black);
        texto('www.rue21.com',0,74,1,0,$arialNarrow,$white,7,0,0);
        
        texto('VND STYLE',15,145,0,0,$arialNarrow,$black,9,0,0);
        texto($VENDORSTYLE,80,145,0,0,$arial,$black,8.5,0,0);
        
        texto('CLASS',15,157,0,0,$arialNarrow,$black,9,0,0);
        texto($CLASS,80,157,0,0,$arial,$black,8.5,0,0);
        
        texto($SEASON,110,157,0,0,$arial,$black,8.5,0,0);
        
        texto('VENDOR',15,169,0,0,$arialNarrow,$black,9,0,0);
        texto($VENDOR,80,169,0,0,$arial,$black,8.5,0,0);
        
        texto('STYLE',15,181,0,0,$arialNarrow,$black,9,0,0);
        texto($STYLE,80,181,0,0,$arial,$black,8.5,0,0);
        
        texto('COLOR',15,192,0,0,$arialNarrow,$black,9,0,0);
        texto($COLOR,80,192,0,0,$arial,$black,8.5,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,253,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,217,1,0,$arialBold,$black,17,0,0);
        
        texto('COMPARE AT',5,271,0,0,$arialNarrow,$black,9,0,0);
        texto($COMPAREPRICE,10,282,0,0,$arial,$black,8,0,1);
        
        imageline($img,10,282,45,275,$black);
        
        texto('$',73,278,0,0,$arial,$black,8,0,0);
        texto($PRICE,0,289,2,12,$arialBold,$black,17,0,-1);
        
        // Creacion del Barcode
        barcode($UPC,18,78,1,37,'UPC');
        
        barcodeTexto(2,-2,0,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
