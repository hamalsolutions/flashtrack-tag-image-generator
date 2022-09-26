<?php                     //    1       2       3      4       5       6       7          8
    $correctos = array('QTY','DEPT','SEASON','COLOR','SIZE','VENDOR','UPC','SUBCLASS','FINELINE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'23');
        $SEASON = asignar(2,'02-10');
        $COLOR = asignar(3,'RED');
        $SIZE = asignar(4,'MEDIUM');
        $VENDOR = asignar(5,'41M94000W');
        $UPC = asignar(6,'704386333225');
        $SUBCLASS = asignar(7,'00');
        $FINELINE = asignar(8,'0046');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
                
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('WalMart_Logo.ttf');
        
            // Introducimos los datos
        
        texto('w',0,26,1,0,$logo,$black,25,0,0);
        
        texto($SEASON,15,50,0,0,$arial,$black,8,0,0);
        
        texto($VENDOR,15,65,0,0,$arial,$black,8,0,0);
        
        texto($DEPT.'-'.$SUBCLASS.'-'.$FINELINE,0,50,2,10,$arial,$black,8,0,0);
        
        texto($COLOR,0,65,2,10,$arial,$black,8,0,0);
        
        cajaVacia(15,70,170,20,$black);
        texto('SIZE',40,85,0,0,$arial,$black,9.5,0,0);
        texto($SIZE,85,85,0,0,$arial,$black,9.5,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,73,1.3,57,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>