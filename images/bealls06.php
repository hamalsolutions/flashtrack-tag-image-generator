<?php                    //    1       2      3      4      5 
    $correctos = array('QTY','SIZE','STYLE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $STYLE = asignar(2,'BTAS2082');
        $UPC = asignar(3,'829268997590');
        $PRICE = asignar(4,'24.99');
        $DEPT = asignar(5,'301');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        texto('Beall\'s',60,50,0,0,$timesNewRomanBold,$black,12,0,0);
        
        texto($STYLE,0,77,3,0,$tahomaBold,$black,9,0,0);
        
        texto('Dept# '.$DEPT,0,98,3,0,$arial,$black,9,0,0);
                
        texto($SIZE,0,230,1,0,$arial,$black,15,0,0);
        
        
        texto($PRICE,0,282,3,0,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,94,1.2,100,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
