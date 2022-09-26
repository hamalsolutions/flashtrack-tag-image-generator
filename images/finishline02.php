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
        $PRICE = asignar(6,'25.00');
        
        // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,50,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,50,2,10,$arial,$black,9,0,0);
        
        texto($SIZE,0,80,1,0,$arial,$black,15,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6 7 8 9 0 1 2',$UPC),0,107,1,0,$arial,$black,9,0,0);
        
        texto($DEPT,10,225,0,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,280,1,0,$arial,$black,24,0,1);
        
        // Creacion del Barcode
        barcode($UPC,6,93,1.2,85,'UPC');
        
        //barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
