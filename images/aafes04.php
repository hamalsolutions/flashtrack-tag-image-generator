<?php                      //   1        2       3      4      5        6           7      8      9
    $correctos = array('QTY','SEASON','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE','DEPT','WEEK');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SEASON = asignar(1,'01-16');
        $COLOR = asignar(2,'RED');
        $SIZE = asignar(3,'M(8/10)');
        $STYLE = asignar(4,'IND04319');
        $UPC = asignar(5,'757322699268');
        $DESCRIPTION = asignar(6,'EMMA DRESS');
        $PRICE = asignar(7,'24.00');
        $DEPT = asignar(8,'1772');
        $WEEK = asignar(9,'F8');
        
            // Creacion del formato
        formato(300,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialbold = fuente('arialbd.ttf');
        $logo = fuente('aafes.ttf');
        
        
        agujero(268, 65);
        
        
        // Introducimos los datos
        texto('A',8,25,0,0,$logo,$black,17,270,0);
        
        texto($SEASON,10,50,0,0,$arialbold,$black,8,270,0);
        
        texto($DEPT,0,50,2,10,$arialbold,$black,8,270,0);
        
        texto($DESCRIPTION,0,65,1,0,$arialbold,$black,7,270,0);
        
        texto($STYLE,0,75,1,0,$arialbold,$black,7,270,0);
        
        texto($WEEK,0,75,2,10,$arialbold,$black,7,270,0);
        
        cajaVacia(70,96,45,34,$black,270);
        cajaRellena(80,90,25,10,$white,$white,270);
        texto('SIZE',83,100,0,0,$arial,$black,7,270,0);
        texto($SIZE,0,111,3,-62,$arial,$black,8,270,0);
        texto($COLOR,0,125,3,-62,$arialbold,$black,7.5,270,0);
        
        texto($PRICE,0,275,1,0,$arialbold,$black,16,270,1);
        
        // Creacion del Barcode
        barcode($UPC,10,205,1,40,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>