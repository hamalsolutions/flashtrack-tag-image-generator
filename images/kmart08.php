<?php                      //    1           2         3      4      5      6      7        8             9      10 
    $correctos = array('QTY','UPC','KSN','DEPT','CATEGORY','SUBCAT','SEASON','DEPT NAME','DESCRIPTION','SIZE','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $UPC = asignar(1,'887117400776');
        $KSN = asignar(2,'05393076-4');
        $DEPT = asignar(3,'46');
        $CATEGORY = asignar(4,'70');
        $SUBCAT = asignar(5,'29');
        $SEASON = asignar(6,'9000');
        $DEPT_NAME = asignar(7,"MENS");
        $DESCRIPTION = asignar(8,'CHARCOAL RACERS DESERT');
        $SIZE = asignar(9,'S');
        $PRICE = asignar(10,'$60.29');
        
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KmartLogo.ttf');
        $arialNarrow= fuente('arialn.ttf');
        
            // Introducimos los datos
        
        
        texto('K',10,30,0,0,$logo,$black,30,270,0);
        
        texto('K3132U-HT-1',75,45,0,0,$arial,$black,5,270,0);
        
        texto($DEPT_NAME,0,185,1,0,$arial,$black,9,270,0);
        
        texto('SIZE',131,35,0,0,$arial,$black,8,0,0);
        texto($SIZE,0,215,1,0,$arialNarrow,$black,18,270,0);
        
        texto('KSN#:',5,235,0,0,$arial,$black,7.5,270,0);
        texto($KSN,37,235,0,0,$arial,$black,7.5,270,0);
        
        texto('DEPT:',5,247,0,0,$arial,$black,7.5,270,0);
        texto($DEPT,36,247,0,0,$arial,$black,7.5,270,0);
        texto('CAT:',65,247,0,0,$arial,$black,7.5,270,0);
        texto($CATEGORY,110,247,0,0,$arial,$black,7.5,270,0);
        
        texto('SEAS:',5,259,0,0,$arial,$black,7.5,270,0);
        texto($SEASON,36,259,0,0,$arial,$black,7.5,270,0);
        texto('SUBCAT:',65,259,0,0,$arial,$black,7.5,270,0);
        texto($SUBCAT,110,259,0,0,$arial,$black,7.5,270,0);
        
        parrafo($DESCRIPTION, 0, 272, 1, 0, $arial, $black, 7.5, 270, 15, 12);
        
        texto('-- - - - - - - - - - - - - --',0,320,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,343,1,0,$arialBold,$black,14,270,1);        
        
        
        // Creacion del Barcode
        barcode($UPC,35,165,1,55,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
