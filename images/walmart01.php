<?php                     //    1       2       3      4       5      6      7
    $correctos = array('QTY','DEPT','SEASON','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DEPT = asignar(1,'25');
        $SEASON = asignar(2,'03-09');
        $COLOR = asignar(3,'WHITE');
        $SIZE = asignar(4,'XXL');
        $STYLE = asignar(5,'2FFMMA080/X');
        $UPC = asignar(6,'884411855196');
        $PRICE = asignar(7,'8.00');
        
            // Creacion del formato
        formato(150,250,255,255,255);
        
            // Colores a usar
        $blue = color(0,0,255);
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo_font = fuente('WalMart_Logo.ttf');
        
            // Contenido del formato
        texto('w',0,30,1,0,$logo_font,$blue,30,0,0);
        
        texto($DEPT,0,55,3,80,$arial,$black,9,0,0);
        
        texto($SEASON,0,70,3,80,$arial,$black,9,0,0);
        
        texto($COLOR,0,70,2,8,$arial,$black,9,0,0);
        
        cajaVacia(10,80,130,20,$blue);
        texto('SIZE',20,95,0,0,$arialBold,$blue,8,0,0);
        
        texto($SIZE,60,95,0,0,$arialBold,$black,8,0,0);
        
        texto($STYLE,0,125,1,0,$arialBold,$black,8,0,0);
        
        texto($UPC,0,143,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,10,220,1,50,$arial,$black,16,0,1);
        
        texto('EVERY DAY LOW PRICE',0,240,1,0,$arialBold,$blue,7,0,0);
        
            // Creacion del Barcode
        barcode($UPC,18,150,1,40,'UPC');
        
        //barcodeTexto(1,0,0,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>