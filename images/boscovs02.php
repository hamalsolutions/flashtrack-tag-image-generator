<?php                      //   1       2       3       4      5     6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'MILITARY GRN');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'2MWF011');
        $UPC = asignar(4,'845550607190');
        $PRICE = asignar(5,'18.00');
        $DEPT = asignar(6,'448');
        $CLASS = asignar(7,'4327');
        
        // Creacion del formato
        formato(300,150,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto("BOSCOV'S",0,55,1,0,$arialBold,$black,13,90,0);
        
        texto('DEPT',20,75,0,0,$arial,$black,8,90,0);
        texto($DEPT,0,90,3,85,$arial,$black,8,90,0);
        
        texto('CLASS',95,75,0,0,$arial,$black,8,90,0);
        texto($CLASS,0,90,3,-75,$arial,$black,8,90,0);
        
        texto('STYLE',0,120,3,67,$arial,$black,8,90,0);
        imageline($img,125,85,125,130,$black);
        texto($STYLE,0,140,3,67,$arial,$black,7,90,0);
        
        texto('COLOR',0,170,3,67,$arial,$black,8,90,0);
        imageline($img,175,85,175,130,$black);
        texto($COLOR,0,190,3,67,$arial,$black,6.5,90,0);
        
        texto('SIZE',0,220,3,67,$arial,$black,8,90,0);
        imageline($img,225,85,225,130,$black);
        texto($SIZE,0,240,3,67,$arialBold,$black,9,90,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,14,90,1);
        
        
        // Creacion del Barcode
        barcode($UPC,140,104,1.1,45,'UPC',90);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>