<?php                    //    1        2     3     4       5    
    $correctos = array('QTY','DEPT','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'377');
        $COLOR = asignar(2,'Assorted');
        $SIZE = asignar(3,'0-6M');
        $STYLE = asignar(4,'HB1220504');
        $UPC = asignar(5,'845550015292');
        $PRICE = asignar(6,'30.00');
                
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('DEPT '.$DEPT,10,45,0,0,$arial,$black,9,0,0);
        
        texto('STYLE',10,58,0,0,$arial,$black,9,0,0);
        texto('COLOR',0,58,2,10,$arial,$black,9,0,0);
        
        texto($STYLE,10,70,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,70,2,10,$arial,$black,9,0,0);
         
        texto($SIZE,0,197,1,0,$arial,$black,18,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,70,1.2,85,'UPC');
        
        barcodeTexto(3,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
