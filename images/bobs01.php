<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SEASON','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'KELLY GREEN');
        $SIZE = asignar(2,'X-LARGE');
        $STYLE = asignar(3,'1WRD2057');
        $UPC = asignar(4,'845550015292');
        $SEASON = asignar(5,'110');
        $DEPT = asignar(6,'21');
        $PRICE = asignar(7,'17.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Dept: '.$DEPT,20,68,0,0,$arial,$black,7.5,0,0);
        
        texto($SEASON,0,68,2,15,$arial,$black,7.5,0,0);
        
        texto('Vendor Style '.$STYLE,20,80,0,0,$arial,$black,7.5,0,0);
        
        texto('Size: '.$SIZE,10,118,0,0,$arial,$black,6.5,0,0);
        
        texto('Color: '.$COLOR,0,118,2,8,$arial,$black,6.5,0,0);
        
        texto('Bob\'s Price',0,270,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,10,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,105,1.2,95,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
