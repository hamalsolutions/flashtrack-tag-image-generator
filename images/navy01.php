<?php                     //    1      2       3       4       5      6      7       8       9
    $correctos = array('QTY','COLOR','SIZE','STYLE','STYLE#','UPC','PRICE','DEPT','CLASS','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {   
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'1YBERD1303');
        $STYLE2 = asignar(4,'6112882');
        $UPC = asignar(5,'845550607190');
        $PRICE = asignar(6,'26.00');
        $DEPT = asignar(7,'24');
        $CLASS = asignar(8,'1401');
        $SEASON = asignar(9,'F08');
        
        // Creacion del formato
        formato(350,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        texto('NAVY EXCHANGE',0,60,1,0,$timesNewRomanBold,$black,10,270,0);
        
        texto('DEPT',10,80,0,0,$arial,$black,7,270,0);
        texto($DEPT,10,90,0,0,$arial,$black,7,270,0);
        
        texto('CL',0,80,1,0,$arial,$black,7,270,0);
        texto($CLASS,0,90,1,0,$arial,$black,7,270,0);
        
        texto('SEA',110,80,0,0,$arial,$black,7,270,0);
        texto($SEASON,0,90,3,-90,$arial,$black,7,270,0);
        
        texto('VENDOR STYLE',10,105,0,0,$arial,$black,6,270,0);
        texto($STYLE,10,115,0,0,$arial,$black,7,270,0);
        
        texto('STYLE NO',100,105,0,0,$arial,$black,6,270,0);
        texto($STYLE2,0,115,3,-86,$arial,$black,7,270,0);
        
        texto('SIZE',10,135,0,0,$arial,$black,7,270,0);
        texto($SIZE,10,145,0,0,$arial,$black,7,270,0);
        
        texto('COLOR',90,135,0,0,$arial,$black,7,270,0);
        texto($COLOR,0,145,2,10,$arial,$black,6.5,270,0);
        
        texto($PRICE,0,330,1,0,$arial,$black,12,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,34,310,1.2,67,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>