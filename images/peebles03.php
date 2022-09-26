<?php                 //       1       2       3         4          5      6      7      8
    $correctos = array('QTY','DEPT','CLASS','STYLE','COLOR CODE','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'1750');
        $CLASS = asignar(2,'369');
        $STYLE = asignar(3,'ATDTE7PI');
        $COLORCODE = asignar(4,'WCL');
        $COLOR = asignar(5,'WHT/DAISY');
        $UPC = asignar(6,'637677230609');
        $SIZE = asignar(7,'M');
        $PRICE = asignar(8,'14.98');
        
        
        // Creacion del formato
        formato(169 ,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        agujero(84, 25);
        // Introducimos los datos
        texto('DEPT#',10,58,0,0,$arial,$black,8,0,0);
        texto($DEPT,10,72,0,0,$arial,$black,8,0,0);
        
        // 2 = from right to left, 10 marging from right edge
        texto('CLASS',0,58,2,10,$arial,$black,8,0,0);
        texto($CLASS,0,72,2,10,$arial,$black,8,0,0);
        
        texto($STYLE,10,86,0,0,$arial,$black,7.5,0,0);
        
        texto($COLORCODE.' / '.$COLOR,0,86,2,10,$arial,$black,7.5,0,0);
        
        texto('SIZE',10,192,0,0,$arial,$black,7.5,0,0);
        texto($SIZE,45,197,0,0,$arialBold,$black,12,0,0);
        
        perforacion(169, 300, 250);
        
        texto($PRICE,0,288,1,0,$arialBold,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,13,88,1.2,70,'UPC');
        
        barcodeTexto(2,-1,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
