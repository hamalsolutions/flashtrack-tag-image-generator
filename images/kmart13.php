<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','UPC','KSN','DEPT','CATEGORY','SUBCAT','SEASON','DEPT NAME','DESCRIPTION','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'88711755655');
        $KSN = asignar(2,'0-05910115-4');
        $DEPT = asignar(3,'49');
        $CATEGORY = asignar(4,'19');
        $SUBCAT = asignar(5,'17');
        $SEASON = asignar(6,'5013');
        $DEPT_NAME = asignar(7,"MENS");
        $DESCRIPTION = asignar(8,'TRIBAL WARRIOR'); 
        $SIZE = asignar(9,'M');
        $PRICE = asignar(10,'$16.99');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KmartLogo.ttf');
        
        // Introducimos los datos
        imageellipse($img,325,60,15,15,$gray);
        
        texto('K',10,30,0,0,$logo,$black,30,270,0);
        
        texto('K3132U-HT -I',75,40,0,0,$arial,$black,5,270,0);
        
        texto($DEPT_NAME,0,190,1,0,$arialBold,$black,  strlen($DEPT_NAME)>15?7:10,270,0);
        
        texto('SIZE',125,22,0,0,$arial,$black,9,0,0);
        texto($SIZE,28,220,0,0,$arial,$black,14,270,0);
        
        texto('KSN:',5,246,0,0,$arial,$black,7.5,270,0);
        texto($KSN,38,246,0,0,$arial,$black,7.5,270,0);
        
        texto('DEPT:',5,258,0,0,$arial,$black,7.5,270,0);
        texto($DEPT,38,258,0,0,$arial,$black,7.5,270,0);
        
        texto('SEAS:',5,270,0,0,$arial,$black,7.5,270,0);
        texto($SEASON,38,270,0,0,$arial,$black,7.5,270,0);
        
        texto('CAT:',63,258,0,0,$arial,$black,7.5,270,0);
        texto($CATEGORY,105,258,0,0,$arial,$black,7.5,270,0);
        
        texto('SUBCAT:',63,270,0,0,$arial,$black,7.5,270,0);
        texto($SUBCAT,105,270,0,0,$arial,$black,7.5,270,0);
        
        texto($DESCRIPTION,0,295,1,0,$arial,$black,strlen($DESCRIPTION)>18?6.5:7.5,270,0);
        
        texto('-- - - - - - - - - - - - - --',0,310,1,0,$arial,$gray,9,270,0);
        
        texto($PRICE,0,335,1,0,$arial,$black,14,270,1);
        
        // Creacion del Barcode
        barcode($UPC,17,185,1.1,78,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
