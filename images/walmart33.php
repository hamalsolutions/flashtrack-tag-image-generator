<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','SEASON','DEPT','SUB','FINELINE','TRACKING');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'GT10DDSB');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'7.50');
        $SEASON = asignar(6,'01-13');
        $DEPT = asignar(7,'23');
        $SUB = asignar(8,'00');
        $FINELINE = asignar(9,'2832');
        $TRACKING = asignar(10,'TRACKING#');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,55,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,55,2,10,$arial,$black,8,0,0);
        
        texto($SEASON,20,80,0,0,$arial,$black,9,0,0);
        
        texto($TRACKING,20,95,0,0,$arial,$black,9,0,0);
        
        texto($FINELINE,texto($SUB,texto($DEPT,10,220,0,0,$arial,$black,9,0,0)-5,220,0,0,$arial,$black,9,0,0)-5,220,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,235,2,10,$arial,$black,10,0,0);
        
        texto($PRICE,0,270,1,0,$arial,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,77,1.3,105,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
