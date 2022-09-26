<?php                      //      1        2      3     4       5       6       7      8        9     10
    $correctos = array('QTY','GROUP NAME','SIZE','KSN','DEPT','SEASON','CAT','SUBCAT','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $GROUPNAME = asignar(1,'JUNIORS PLUS');
        $SIZE = asignar(2,'2X');
        $KSN = asignar(3,'0-03093813-8');
        $DEPT = asignar(4,'27');
        $SEASON = asignar(5,'2016');
        $CAT = asignar(6,'86');
        $SUBCAT = asignar(7,'42');
        $PRICE = asignar(8,'18.99');
        $UPC = asignar(9,'645545859197');
        
            // Creacion del formato
        formato(125,281,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(232,17,65);
                // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $membersEarns = fuente('MembersEarnPoints_Logo.ttf');
        $logo = fuente('NewKmart_Logo-2016.ttf');
        
        // Introducimos los datos
        texto('K',0,50,1,0,$logo,$red,46,0,0);
        
        agujero(62, 20);
        
        texto('K20948U-HT-I',0,60,2,5,$arialBold,$black,4.5,0,0);
        
        texto($GROUPNAME,0,130,1,0,$arialBold,$black,7.5,0,0);
        
        texto('SIZE',120,35,0,0,$arialBold,$black,6,90,0);
        texto($SIZE,0,157,1,0,$arialBold,$black,12,0,0);
        
        texto('KSN: '.$KSN,10,175,0,0,$arial,$black,5.5,0,0);
        texto('DEPT: '.$DEPT,10,185,0,0,$arial,$black,5.5,0,0);
        texto('SEAS: '.$SEASON,10,195,0,0,$arial,$black,5.5,0,0);
        
        texto('CAT: '.$CAT,0,185,2,7,$arial,$black,5.5,0,0);
        texto('SUBCAT: '.$SUBCAT,0,195,2,7,$arial,$black,5.5,0,0);
        
        texto('M',0,237,1,0,$membersEarns,$black,24.5,0,0);
        
        perforacion();
        
        texto($PRICE,0,270,1,0,$arialBold,$black,10.5,0,1);
        
        // Creacion del Barcode
        barcode($UPC,7,65,1,45,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
