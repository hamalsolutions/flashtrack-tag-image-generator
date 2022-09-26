<?php                      //   1      2       3      4     5      6      7
    $correctos = array('QTY','COLOR','SIZE','CLASS','SKU','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'GREEN');
        $SIZE = asignar(2,'XXLARGE');
        $CLASS = asignar(3,'04');
        $SKU = asignar(4,'10811744');
        $UPC = asignar(5,'885347132467');
        $PRICE = asignar(6,'14.99');
        $DEPT = asignar(7,'01');
        
        // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('DEPT:',20,42,0,0,$arial,$black,7,0,0);
        texto($DEPT,52,42,0,0,$arial,$black,9,0,0);
        
        texto('CLASS:',20,59,0,0,$arial,$black,7,0,0);
        texto($CLASS,55,59,0,0,$arial,$black,9,0,0);
        
        texto('SIZE:',20,77,0,0,$arial,$black,7,0,0);
        texto($SIZE,47,77,0,0,$arial,$black,10,0,0);
        
        texto('COLOR:',20,92,0,0,$arial,$black,7,0,0);
        $colorSize = (strlen($COLOR)>10)?7.5:9;
        texto($COLOR,59,92,0,0,$arial,$black,$colorSize,0,0);
        
        texto('SKU:',25,115,0,0,$arial,$black,7,0,0);
        texto($SKU,52,115,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,255,1,0,$arial,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,115,1.1,60,'UPC');
        
        barcodeTexto(3,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
