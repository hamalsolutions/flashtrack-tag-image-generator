<?php                      //    1           2         3      4      5      6      7        8             9      10 
    $correctos = array('QTY','UPC','KSN','DEPT','CATEGORY','SUBCAT','SEASON','DEPT NAME','DESCRIPTION','SIZE','PRICE');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'88711755655');
        $KSN = asignar(2,'0-05910115-4');
        $DEPT = asignar(3,'46');
        $CATEGORY = asignar(4,'70');
        $SUBCAT = asignar(5,'29');
        $SEASON = asignar(6,'9000');
        $DEPT_NAME = asignar(7,"MENS");
        $DESCRIPTION = asignar(8,'TRIBAL WARRIOR'); 
        $SIZE = asignar(9,'M');
        $PRICE = asignar(10,'$16.99');
        
        
        // Creacion del formato
        formato(125,350,255,255,255);
                        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KmartLogo.ttf');
        $arialNarrow= fuente('arialn.ttf');
        
        // Introducimos los datos
        
        agujero(62, 25);
        
        texto('K',10,35,0,0,$logo,$black,30,0,0);
        
        texto('K3132U-HT -I',75,25,0,0,$arial,$black,5,0,0);
        
        texto($DEPT_NAME,0,155,1,0,$arial,$black,9,0,0);
        
        texto('SIZE',170,22,0,0,$arial,$black,5,90,0);
        texto($SIZE,28,180,0,0,$arialNarrow,$black,18,0,0);
        
        texto('KSN#:',12,210,0,0,$arial,$black,7.5,0,0);
        texto($KSN,45,210,0,0,$arial,$black,7.5,0,0);
        
        texto('DEPT:',12,222,0,0,$arial,$black,7.5,0,0);
        texto($DEPT,61,222,0,0,$arial,$black,7.5,0,0);
        
        texto('CAT:',12,234,0,0,$arial,$black,7.5,0,0);
        texto($CATEGORY,61,234,0,0,$arial,$black,7.5,0,0);
        
        texto('SUBCAT:',12,246,0,0,$arial,$black,7.5,0,0);
        texto($SUBCAT,61,246,0,0,$arial,$black,7.5,0,0);
        
        texto('SEAS:',12,258,0,0,$arial,$black,7.5,0,0);
        texto($SEASON,61,258,0,0,$arial,$black,7.5,0,0);
        
        parrafo($DESCRIPTION, 0, 295, 1, 0, $arial, $black, 7.5, 0, 15, 12);
        
        perforacion(125, 350, 318);
                
        texto($PRICE,0,340,1,0,$arialBold,$black,10,0,1);        
                
        // Creacion del Barcode
        barcode($UPC,8,60,1,66,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
