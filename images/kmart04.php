<?php                      //  1     2          3         4      5      6        7             8         9       10       11
    $correctos = array('QTY','SKU','SIZE','DESCRIPTION','UPC','PRICE','DEPT','DEPT NAME','FIXTURE NAME','CAT','SUBCAT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
              // Valores por default para presentar en el formato
        $SKU = asignar(1,'0-42722213-8');
        $SIZE = asignar(2,'L(10/12)');
        $DESCRIPTION = asignar(3,'HOTWHEELS S/S');
        $UPC = asignar(4,'726392385005');
        $PRICE = asignar(5,'46.00');
        $DEPT = asignar(6,'49');
        $DEPT_NAME = asignar(7,'MENS');
        $FIXTURE = asignar(8,'SPINNER FIXTURE');
        $CAT = asignar(9,'71');
        $SUBCAT = asignar(10,'19');
        $SEASON = asignar(11,'3006');
        
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
        
        texto('SKU: '.$SKU,0,48,1,0,$arial,$black,7,0,0);
        
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
            
        texto($DEPT_NAME,0,245,1,0,$arialBold,$black,8,0,0);
        
        texto($FIXTURE,0,257,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,270,1,0,$arialBold,$black,6,0,0);
        
        texto('-- - - - - - - - - - - - - - - --',0,285,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,310,1,0,$arial,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,54,1,50,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>