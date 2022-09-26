<?php                       //   1       2      3     4      5      6       7      8 
    $correctos = array('QTY','STYLE','SIZE','COLOR','UPC','PRICE','DEPT','MIC','MONTH');
    require_once('../includes/html2.php');
    /**
     * Changes:
     *  The size changed from 2 1/4 x 3/4  to  2 x 1
     */
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
        formato(250,125,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        //imagettftext($img,30,90,30,113,$text_color,$logo_font,'R');        
        
        texto('DEPT',15,20,0,0,$arial,$black,7,90,0);
        imageline($img,21,110,21,85,$black);
        texto($DEPT,0,31,3,70,$arial,$black,8,90,0);
        
        texto('MIC',82,20,0,0,$arial,$black,7,90,0);
        imageline($img,21,45,21,25,$black);
        texto($MIC,0,31,3,-52,$arial,$black,8,90,0);
        
        texto($STYLE,0,50,1,0,$arial,$black,8,90,0);
        
        texto($COLOR,0,60,1,0,$arial,$black,8,90,0);
        
        texto($MONTH,0,70,1,0,$arial,$black,8,90,0);
        
        texto($SIZE,0,86,1,0,$arial,$black,8,90,0);
        
        texto($UPC,120,85,0,0,$arial,$black,8,0,0);
        
        texto('MSR $'.sinSigno($PRICE),0,240,1,0,$arialBold,$black,9,90,0);
        
        
        // Creacion del Barcode
        barcode($UPC,90,95,1,35,'UPC',90);
        
        require_once('../includes/footer.php');
    }
?>
