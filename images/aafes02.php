<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','REF SIZE','PRICE','REF STYLE','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'RED');
        $SIZE = asignar(2,'M(8/10)');
        $STYLE = asignar(3,'IND04319');
        $UPC = asignar(4,'757322699268');
        $REFSIZE = asignar(5,'REFERENCE SIZE');
        $PRICE = asignar(6,'24.00');
        $REFSTYLE = asignar(7,'1772');
        $SEASON = asignar(8,'F8');
        
        // Creacion del formato
        formato(300,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('aafes.ttf');
        
        // Introducimos los datos
        texto('AAFES',0,50,1,0,$arial,$black,17,270,0);
        
        texto($REFSTYLE,0,65,2,10,$arial,$black,8.5,270,0);
        
        texto($SEASON,10,65,0,0,$arial,$black,8.5,270,0);
        
        texto($REFSIZE,0,80,1,0,$arial,$black,8.5,270,0);
        
        texto($STYLE,20,95,0,0,$arial,$black,8.5,270,0);
        
        texto('COLOR',0,105,3,-42,$arial,$black,8.5,270,0);
        texto($COLOR,0,115,3,-42,$arial,$black,8.5,270,0);
        
        texto('SIZE',10,125,0,0,$arial,$black,8.5,270,0);
        texto($SIZE,35,135,0,0,$arial,$black,8.5,270,0);
        
        
        
        texto($PRICE,0,285,1,0,$arial,$black,14,270,1);
        
        // Creacion del Barcode
        barcode($UPC,10,255,1,50,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
