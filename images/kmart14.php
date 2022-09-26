<?php                      //  1     2          3          4        5      6      7        8         9      10       11
    $correctos = array('QTY','KSN','SIZE','ITEM','DESCRIPTION','UPC','PRICE','DEPT','CAT','SUBCAT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
              // Valores por default para presentar en el formato
        $KSN = asignar(1,'06621059-2');
        $SIZE = asignar(2,'XS 4/5');
        $ITEM = asignar(3,'TS175FGEN');
        $DESCRIPTION = asignar(4,'GEN CHECK PKT TRUCK T/TOY TCK WHT-XS 4/5');
        $UPC = asignar(5,'726392385005');
        $PRICE = asignar(6,'12.99');
        $DEPT = asignar(7,'49');
        $CAT = asignar(8,'71');
        $SUBCAT = asignar(9,'67');
        $SEASON = asignar(10,'9000');
        
            // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow= fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $logo = fuente('KmartLogo.ttf');
        
        imagefilledellipse($img,325,60,10,10,$transparent);
        imageellipse($img,325,60,10,10,$gray);
        
               // Introducimos los datos
        
        texto('K',10,30,0,0,$logo,$black,30,270,0);
        
        texto('3119P-HT-I',0,20,2,5,$arial,$black,6,270,0);
        
        texto('DEPT: ',5,62,0,0,$arial,$black,7,270,0);
        texto($DEPT,50,62,0,0,$arial,$black,7,270,0);
        
        texto('CAT: ',5,72,0,0,$arial,$black,7,270,0);
        texto($CAT,50,72,0,0,$arial,$black,7,270,0);
        
        texto('SUBCAT: ',5,82,0,0,$arial,$black,7,270,0);
        texto($SUBCAT,50,82,0,0,$arial,$black,7,270,0);
        
        texto('SEAS: ',70,62,0,0,$arial,$black,7,270,0);
        texto($SEASON,102,62,0,0,$arial,$black,7,270,0);
        
        texto('KSN: ',70,72,0,0,$arial,$black,7,270,0);
        texto($KSN,70,82,0,0,$arial,$black,7,270,0);
        
        
        texto($ITEM,0,230,1,0,$arialBold,$black,7,270,0);
        
        parrafo($DESCRIPTION, 0, 248, 1, 0, $arial, $black, 7, 270, 20, 10,false);
        
        texto('SIZE',50,25,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,295,1,0,$arialNarrowBold,$black,14,270,0);
                
        texto('-- - - - - - - - - - - - - - - --',0,310,1,0,$arial,$black,10,270,0);
        
        texto($PRICE,0,335,1,0,$arialBold,$black,14,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,22,210,1,70,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>