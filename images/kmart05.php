<?php                      //  1        2           3      4      5       6       7       8      9
    $correctos = array('QTY','SIZE','DESCRIPTION','UPC','PRICE','DEPT','GENDER','CAT','SUBCAT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $DESCRIPTION = asignar(2,'HOTWHEELS S/S');
        $UPC = asignar(3,'726392385005');
        $PRICE = asignar(4,'46.00');
        $DEPT = asignar(5,'49');
        $GENDER = asignar(6,'MENS');
        $CAT = asignar(7,'71');
        $SUBCAT = asignar(8,'19');
        $SEASON = asignar(9,'3006');
        
            // Creacion del formato
        formato(138,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $swis721Bold = fuente('tt3004m_.TTF');
        $logo = fuente('KmartLogo.ttf');
        
        
        // Introducimos los datos
        
        texto('K',10,30,0,0,$logo,$red,30,0,0);
        
        texto('DEPT: ',75,176,0,0,$arial,$black,7,0,0);
        texto($DEPT,0,176,2,7,$arial,$black,7,0,0);
        
        texto('CAT: ',75,188,0,0,$arial,$black,7,0,0);
        texto($CAT,0,188,2,7,$arial,$black,7,0,0);
        
        texto('SUBCAT: ',75,200,0,0,$arial,$black,7,0,0);
        texto($SUBCAT,0,200,2,7,$arial,$black,7,0,0);
        
        texto('SEAS: ',75,212,0,0,$arial,$black,7,0,0);
        texto($SEASON,0,212,2,7,$arial,$black,7,0,0);
        
        texto('SIZE',125,30,0,0,$arial,$black,12,90,0);
        
        if (strstr($SIZE,'('))
        {
            $size1 = substr($SIZE,0,strpos($SIZE,'('));
            texto($size1,0,185,3,30,$arialBold,$black,13,0,0);
            
            $size2 = substr($SIZE,strpos($SIZE,'('),strlen($SIZE));
            texto($size2,0,200,3,30,$arialBold,$black,10,0,0);
            
        }
        else
            texto($SIZE,0,190,3,30,$arialBold,$black,13,0,0);
            
        texto($GENDER,0,250,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,261,1,0,$arialBold,$black,6,0,0);
        
        texto('-- - - - - - - - - - - - - - - --',0,285,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,310,1,0,$arial,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,55,1,70,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
