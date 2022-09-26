<?php                       //   1       2       3     4     5      6
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'08ATM002');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884616098831');
        $DEPT = asignar(5,'132');
        $PRICE = asignar(6,'9.99');
        
        // Creacion del formato
        formato(200,125,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,20,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,20,2,10,$arial,$black,9,0,0);
        
        texto($SIZE,0,30,1,0,$arial,$black,10,0,0);
        
        texto(formatizarTexto('1      2 3 4 5 6    7 8 9 0 1      2',$UPC),0,47,1,0,$arial,$black,9,0,0);
        
        texto($DEPT,10,105,0,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,120,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,11,33,1.5,55,'UPC');
        
        //barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
