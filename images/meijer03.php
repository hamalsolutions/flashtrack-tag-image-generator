<?php                    //    1        2      3      4      5        6          7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','KEY CODE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'XXS');
        $STYLE = asignar(3,'MK2DNE');
        $UPC = asignar(4,'888005645453');
        $PRICE = asignar(5,'28.00');
        $KEYCODE = asignar(6,'55');
        $DESCRIPTION = asignar(7,'NE WII KNT BXR');
        
             // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Meijer',0,23,1,0,$arialBold,$black,11,0,0);
        
        texto($STYLE,10,67,0,0,$arial,$black,8,0,0);
                       
        texto($KEYCODE,10,80,0,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,10,92,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',10,190,0,0,$arial,$black,8,0,0);
        texto($SIZE,40,190,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,10,207,0,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,280,1,0,$arial,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,17,100,1,53,'UPC');
        
        barcodeTexto(2,-1,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
