<?php                      //      1         2       3      4       5        6        7      8        9         10
    $correctos = array('QTY','COLOR CODE','COLOR','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE','SIZE CODE','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'020');
        $COLOR = asignar(2,'GREY');
        $STYLE = asignar(3,'4TJKM111030G');
        $DEPT = asignar(4,'244');
        $CLASS = asignar(5,'50');
        $SUBCLASS = asignar(6,'51');
        $UPC = asignar(7,'885347491236');
        $PRICE = asignar(8,'24.00');
        $SIZECODE = asignar(9,'33905');
        $SIZE = asignar(10,'XLARGE');
        
        // Creacion del formato
        formato(163,125,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        texto('KOHL\'S',10,15,0,0,$arialBold,$black,9,0,0);
        texto('kohls.com',10,23,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,20,2,10,$arial,$black,8,0,0);
        
        texto($COLORCODE.' '.$COLOR,0,33,1,0,$arialBold,$black,6.5,0,0);
        
        texto('STYLE '.$STYLE,0,43,1,0,$arialBold,$black,7,0,0);
        
        texto($DEPT,0,55,3,81,$arialBold,$black,8,0,0);
        texto($CLASS,0,55,1,0,$arialBold,$black,8,0,0);
        texto($SUBCLASS,0,55,3,-90,$arialBold,$black,8,0,0);
        
        texto($SIZECODE,0,107,1,0,$arialBold,$black,7,0,0);
        
        texto($PRICE,0,120,1,0,$arialBold,$black,9,0,1);
        
        // Creacion del Barcode
        barcode($UPC,25,58,1,32,'UPC');
        
        barcodeTexto(1,0,-3,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>