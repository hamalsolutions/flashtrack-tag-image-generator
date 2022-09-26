<?php                     //   1          2          3        4          5           6       7      8     9       10
    $correctos = array('QTY','DEPT#','DEPARTMENT','CLASS','SUBCLASS','COLOR CODE','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'159');
        $DEPARTMENT = asignar(2,'MENS S/S');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'14');
        $COLORCODE = asignar(5,'031');
        $COLOR = asignar(6,'NATURAL');
        $SIZE = asignar(7,'XXLARGE');
        $STYLE = asignar(8,'1TAT6960SFF10');
        $UPC = asignar(9,'885347090095');
        $PRICE = asignar(10,'18.00');
        
            // Creacion del formato
        formato(150,120,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $ocrB_SB = fuente('OCR-B_SB.ttf');
        $kohls_Logo = fuente('KohlsLogo-B.ttf');
        
        // Introducimos los campos de datos en el formato
        texto('k',5,14,0,0,$kohls_Logo,$black,18,0,0);
        texto('Kohls.com',5,22,0,0,$arial,$black,6,0,0);
        
        texto('SIZE  '.$SIZE,0,14,2,5,$arial,$black,6,0,0);
        
        texto($COLORCODE,50,28,0,0,$arial,$black,6,0,0);
        texto($COLOR,66,28,0,0,$arial,$black,6.5,0,0);
        
        texto('STYLE:',30,40,0,0,$arial,$black,7,0,0);
        texto($STYLE,64,40,0,0,$arial,$black,7,0,0);
        
        texto($DEPT,0,50,3,60,$ocrB_SB,$black,7,0,0);
        
        texto($CLASS,0,50,1,0,$ocrB_SB,$black,7,0,0);
        
        texto($SUB,0,50,3,-60,$ocrB_SB,$black,7,0,0);
        
        texto($DEPARTMENT,0,95,1,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,110,1,0,$arialBold,$black,9,0,1);
       
        // Creacion del Barcode
        barcode($UPC,18,52,1,27,'UPC');
        
        barcodeTexto(0,0,-4,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
