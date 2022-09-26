<?php                       //   1       2      3     4      5      6       7      8 
    $correctos = array('QTY','STYLE','SIZE','COLOR','UPC','PRICE','DEPT','MIC','MONTH');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'D146524S2');
        $SIZE = asignar(2,'ONE SIZE');
        $COLOR = asignar(3,'BISCOTTI');
        $UPC = asignar(4,'885347141421');
        $PRICE = asignar(5,'79.00');
        $DEPT = asignar(6,'0186');
        $MIC = asignar(7,'284');
        $MONTH = asignar(8,'SEPTEMBER');
        
        // Creacion del formato
        formato(250,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        //imagettftext($img,30,90,30,113,$text_color,$logo_font,'R');        
        
        texto('DEPT',20,30,0,0,$arial,$black,6,90,0);
        imageline($img,31,80,31,58,$black);
        texto($DEPT,0,41,3,40,$arial,$black,7,90,0);
        
        texto('MIC',62,30,0,0,$arial,$black,6,90,0);
        imageline($img,31,39,31,21,$black);
        texto($MIC,0,41,3,-39,$arial,$black,7,90,0);
        
        texto($STYLE,0,57,1,0,$arial,$black,7,90,0);
        
        texto($COLOR,0,70,1,0,$arial,$black,7,90,0);
        
        texto($MONTH,0,80,1,0,$arial,$black,7,90,0);
        
        texto($SIZE,0,96,1,0,$arial,$black,8,90,0);
        
        texto($UPC,130,85,0,0,$arial,$black,8,0,0);
        
        texto('MSR $'.sinSigno($PRICE),0,240,1,0,$arialBold,$black,9,90,0);
        
        
        // Creacion del Barcode
        barcode($UPC,77,105,1,47,'UPC',90);
        
        require_once('../includes/footer.php');
    }
?>
