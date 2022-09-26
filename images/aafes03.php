<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'RED');
        $SIZE = asignar(2,'M(8/10)');
        $STYLE = asignar(3,'D104');
        $UPC = asignar(4,'757322699268');
        $PRICE = asignar(5,'39.50');
        $DEPT = asignar(6,'1772');
        $SEASON = asignar(7,'FW907');
        
        // Creacion del formato
        formato(300,169,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Xchange_Logo.ttf');
        
        // Introducimos los datos
        texto('A',18,45,0,0,$logo,$black,37,270,0);
        
        texto($DEPT,0,45,2,15,$arial,$black,9,270,0);
        
        texto('EXCHANGE',9,55,0,0,$arial,$black,7.5,270,0);
        
        texto($STYLE,0,85,1,0,$arial,$black,7.5,270,0);
        
        texto($SEASON,0,70,3,96,$arial,$black,7.5,270,0);
        
        texto(formatizarTexto('8   1 0 8 8 7   0 1 9 4 6   6',$UPC),78,75,0,0,$arial,$black,8,0,0);
        
        cajaVacia(92,111,45,34,$black,270);
        cajaRellena(102,105,25,10,$white,$white,270);
        texto('SIZE',105,114,0,0,$arial,$black,7,270,0);
        texto($SIZE,0,126,3,-62,$arial,$black,8,270,0);
        texto($COLOR,0,140,3,-62,$arial,$black,strlen($COLOR)>7?7:7.5,270,0);
        
        texto($PRICE,0,280,1,0,$arialBold,$black,14,270,1);
        
        // Creacion del Barcode
        barcode($UPC,12,250,1.3,50,'UPC',270);
        
        //barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>