<?php                    //   1      2     3      4       5        6         7
    $correctos = array('QTY','SIZE','DEPT','UPC','STYLE','COLOR','PRICE','VENDOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $SIZE = asignar(1,'XS');
        $DEPT = asignar(2,'696');
        $UPC = asignar(3,'810678027304');
        $STYLE = asignar(4,'0587-LG');
        $COLOR = asignar(5,'BLACK');
        $PRICE = asignar(6,'20.00');
        $VENDOR = asignar(7,'235390');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DEPT,20,60,0,0,$arial,$black,8,0,0);
        texto('Dept',20,75,0,0,$arial,$black,8,0,0);
        
        texto($VENDOR,0,60,1,0,$arial,$black,8,0,0);
        texto('Vendor',0,75,1,0,$arial,$black,8,0,0);
        
        texto($STYLE,0,60,2,10,$arial,$black,8,0,0);
        texto('Style',122,75,0,0,$arial,$black,8,0,0);
        
        texto('COLOR '.$COLOR,0,105,1,0,$arial,$black,14,0,0);
        
        texto($SIZE,0,140,1,0,$arial,$black,16,0,0);     
                       
        // Creacion del Barcode
        barcode($UPC,13,128,1.2,75,'UPC');
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        texto($PRICE,0,277,1,0,$arial,$black,14,0,1);
        
        require_once('../includes/footer.php');
    }
?>
