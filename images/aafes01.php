<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE','DEPT','WEEK');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'RED');
        $SIZE = asignar(2,'M(8/10)');
        $STYLE = asignar(3,'IND04319');
        $UPC = asignar(4,'757322699268');
        $DESCRIPTION = asignar(5,'EMMA DRESS');
        $PRICE = asignar(6,'24.00');
        $DEPT = asignar(7,'1772');
        $WEEK = asignar(8,'F8');
        
            // Creacion del formato
        formato(300,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('aafes.ttf');
        
        // Introducimos los datos
        texto('A',8,25,0,0,$logo,$black,17,270,0);
        
        texto($DEPT,0,35,2,10,$arial,$black,7.5,270,0);
        
        texto($DESCRIPTION,0,50,1,0,$arial,$black,7.5,270,0);
        
        texto($STYLE,0,60,1,0,$arial,$black,7.5,270,0);
        
        texto($WEEK,0,60,2,10,$arial,$black,7.5,270,0);
        
        cajaVacia(70,91,45,34,$black,270);
        cajaRellena(80,85,25,10,$white,$white,270);
        texto('SIZE',83,94,0,0,$arial,$black,7,270,0);
        texto($SIZE,0,106,3,-62,$arial,$black,8,270,0);
        texto($COLOR,0,120,3,-62,$arial,$black,7.5,270,0);
        
        texto($PRICE,0,240,1,0,$arial,$black,12,270,1);
        
        // Creacion del Barcode
        barcode($UPC,10,200,1,40,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>