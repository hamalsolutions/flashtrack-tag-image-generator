<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRODUCT NAME','COLOR CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'Y L');
        $STYLE = asignar(3,'43330000241');
        $UPC = asignar(4,'883312400993');
        $PNAME = asignar(5,'GIBSON YTH CUSTOM HOOD FLC');
        $COLORCODE = asignar(6,'100');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $soloLogos = fuente('solo_logos2.ttf');
        
        // Introducimos los datos
        
        texto('D',25,35,0,0,$soloLogos,$black,17,0,0);
        texto('100% RECYCLE',10,45,0,0,$arial,$black,5,0,0);
        
        texto('E',120,35,0,0,$soloLogos,$black,17,0,0);
        texto('100% ACID FREE',102,45,0,0,$arial,$black,5,0,0);
        
        texto('A',0,110,1,0,$soloLogos,$black,30,0,0);
        
        texto($STYLE,8,156,0,0,$arial,$black,7,0,0);
        texto($COLORCODE,102,156,0,0,$arial,$black,7,0,0);
        
        texto($PNAME,8,170,0,0,$arial,$black,7,0,0);
        
        texto('Color:',8,184,0,0,$arial,$black,7,0,0);
        texto($COLOR,38,184,0,0,$arial,$black,7,0,0);
        
        texto('Size:',8,201,0,0,$arial,$black,7,0,0);
        texto($SIZE,38,201,0,0,$arial,$black,7,0,0);
        
        texto(formatizarTexto('1   23456  12345    1', $UPC),0,283,1,0,$arial,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,8,169,1.3,100,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
