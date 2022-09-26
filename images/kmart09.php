<?php                     //    1      2       3      4      5       6          7       8         9
    $correctos = array('QTY','CAT','SIZE','SUBCAT','UPC','PRICE','KSN','SEASON','DEPT','TICKET CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $CAT = asignar(1,'71');
        $SIZE = asignar(2,'XS (4/5)');
        $SUBCAT = asignar(3,'19');
        $UPC = asignar(4,'846556281414');
        $PRICE = asignar(5,'8.99');
        $KSN = asignar(6,'0-05244462-7');
        $SEASON = asignar(7,'9000');
        $DEPT = asignar(8,'34');
        $CODE = asignar(9,'K2178G-SS-I');
        
        // Creacion del formato
        formato(550,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(221,221,221);
        $white = color(255,255,255);
        
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KmartLogo.ttf');
        
        // Introducimos los datos
        
        cajaRellena(1,1,547,97,$gray,$gray);
        
        $textColorForSize = $black;
        $yPos = 45;
        for($i=1;$i<=4;$i++){
            texto($SIZE,0,$yPos,1,0,$arialBold,$textColorForSize,12,90,0);
            imageline($img,$yPos+3,10,$yPos+3,90,$textColorForSize);
            $yPos += 65;
            $textColorForSize = $textColorForSize==$black?$white:$black;
        }
        
        cajaRellena(300,4,131,90,$white,$white);
        
        texto('K',437,23,0,0,$logo,$black,30,0,0);
        texto($CODE,463,15,0,0,$arial,$black,6,0,0);
        
        texto('DEPT:',437,40,0,0,$arial,$black,7,0,0);
        texto($DEPT,480,40,0,0,$arial,$black,7,0,0);
        
        texto('CAT:',437,50,0,0,$arial,$black,7,0,0);
        texto($CAT,480,50,0,0,$arial,$black,7,0,0);
        
        texto('SUBCAT:',437,60,0,0,$arial,$black,7,0,0);
        texto($SUBCAT,480,60,0,0,$arial,$black,7,0,0);
        
        texto('SEAS:',437,70,0,0,$arial,$black,7,0,0);
        texto($SEASON,480,70,0,0,$arial,$black,7,0,0);
        
        texto('KSN:',437,80,0,0,$arial,$black,7,0,0);
        texto($KSN,437,90,0,0,$arial,$black,7,0,0);
        
        texto('SHOP Kmart.com',0,523,1,0,$arial,$black,7,90,0);
        
        texto($PRICE,0,542,1,0,$arial,$black,9,90,1);
        
        // Creacion del Barcode
        barcode($UPC,80,310,1,55,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>