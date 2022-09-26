<?php                      //  1     2          3          4        5      6      7        8         9      10       11
    $correctos = array('QTY','KSN','SIZE','ITEM','DESCRIPTION','UPC','PRICE','DEPT','PIC','CAT','SUBCAT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
              // Valores por default para presentar en el formato
        $KSN = asignar(1,'05543276-9');
        $SIZE = asignar(2,'MEDIUM');
        $ITEM = asignar(3,'CM0TXSCOR');
        $DESCRIPTION = asignar(4,'CORONA TEE/FLOP CMBOMN NAVY-M');
        $UPC = asignar(5,'726392385005');
        $PRICE = asignar(6,'12.99');
        $DEPT = asignar(7,'46');
        $PIC = asignar(8,'K3132U-HT-I');
        $CAT = asignar(9,'69');
        $SUBCAT = asignar(10,'30');
        $SEASON = asignar(11,'9000');
        
            // Creacion del formato
        formato(138,325,255,255,255);
        
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
        
        imagefilledellipse($img,68,26,10,10,$transparent);
        imageellipse($img,68,26,10,10,$gray);
        
               // Introducimos los datos
        
        texto('K',10,30,0,0,$logo,$red,30,0,0);
        
        texto($PIC,0,25,2,7,$arial,$black,6,0,0);
        
        texto('DEPT: ',10,62,0,0,$arial,$black,7,0,0);
        texto($DEPT,55,62,0,0,$arial,$black,7,0,0);
        
        texto('CAT: ',10,72,0,0,$arial,$black,7,0,0);
        texto($CAT,55,72,0,0,$arial,$black,7,0,0);
        
        texto('SUBCAT: ',10,82,0,0,$arial,$black,7,0,0);
        texto($SUBCAT,55,82,0,0,$arial,$black,7,0,0);
        
        texto('SEAS: ',75,62,0,0,$arial,$black,7,0,0);
        texto($SEASON,107,62,0,0,$arial,$black,7,0,0);
        
        texto('KSN: ',75,72,0,0,$arial,$black,7,0,0);
        texto($KSN,75,82,0,0,$arial,$black,7,0,0);
        
        
        texto($ITEM,0,200,1,0,$arialBold,$black,8,0,0);
        
        parrafo($DESCRIPTION, 0, 218, 1, 0, $arialNarrow, $black, 8.5, 0, 15, 10);
        
        texto('SIZE',55,25,0,0,$arial,$black,6.5,90,0);
        
        texto($SIZE,0,262,1,0,$arialNarrowBold,$black,13,0,0);
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
        
        
            
        
        
        
        
        texto('-- - - - - - - - - - - - - - - --',0,285,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,310,1,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,100,1,70,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>