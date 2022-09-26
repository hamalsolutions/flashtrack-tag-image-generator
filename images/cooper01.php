<?php                      //   1       2      3      4      5           6      7      8
    $correctos = array('QTY','STYLE','COLOR','DEPT','MIC','GROUP NAME','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'S53DC951');
        $COLOR = asignar(2,'B/W FLORAL');
        $DEPT = asignar(3,'0353');
        $MIC = asignar(4,'127');
        $GROUP = asignar(5,'2PC');
        $SIZE = asignar(6,'S');
        $UPC = asignar(7,'708008258248');
        $PRICE = asignar(8,'52.00');
        
        // Creacion del formato
        formato(400,250,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $brown = color(105,76,38);
        $green = color(124,145,36);
        $bggreen = color(208,226,140);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Copper_Key_Logos.ttf');
        
        
        // Introducimos los datos
        
        cajaRellena(0,125,400,125,$brown,$brown);
        texto('A',25,255,0,0,$logo,$green,190,90,0);
        
        cajaRellena(0,0,400,125,$bggreen,$bggreen);
        
        texto('F1-42',135,20,0,0,$arial,$black,6,90,0);
        texto('CKF-20',0,20,2,10,$arial,$black,6,90,0);
        
        texto($STYLE,160,65,0,0,$arial,$black,8,90,0);
        
        texto($COLOR,155,80,0,0,$arial,$black,8,90,0);
        
        texto('DEPT '.$DEPT,160,95,0,0,$arial,$black,8,90,0);
        
        texto('MIC '.$MIC,166,110,0,0,$arial,$black,8,90,0);
        
        texto('GRP '.$GROUP,163,125,0,0,$arial,$black,8,90,0);
        
        texto('SIZE',168,157,0,0,$arialBold,$black,11,90,0);
        
        texto($SIZE,180,177,0,0,$arialBold,$black,11,90,0);
        
        texto('C',170,220,0,0,$logo,$black,120,90,0);
        
        texto('D',170,360,0,0,$logo,$black,120,90,0);
        
        texto($PRICE,160,385,0,0,$arialBold,$black,14,90,1);
        
        // Creacion del Barcode
        barcode($UPC,205,225,1.0,40,'128',90);
        
        barcodeTexto(2,-1,-4,7,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>