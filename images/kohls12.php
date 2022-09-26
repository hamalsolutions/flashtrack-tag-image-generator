<?php                     //   1          2          3        4          5           6       7      8     9       10
    $correctos = array('QTY','DEPT#','DEPARTMENT','CLASS','SUBCLASS','COLOR CODE','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'59');
        $DEPARTMENT = asignar(2,'MENS S/S');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'13');
        $COLORCODE = asignar(5,'031');
        $COLOR = asignar(6,'HEATHER GREY');
        $SIZE = asignar(7,'S');
        $STYLE = asignar(8,'1WRD398R');
        $UPC = asignar(9,'885347090095');
        $PRICE = asignar(10,'18.00');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $ocrB_SB = fuente('OCR-B_SB.ttf');
        $kohls_Logo = fuente('KohlsLogo-B.ttf');
        
        // Introducimos los campos de datos en el formato
        texto('k',30,14,0,0,$kohls_Logo,$black,18,0,0);
        texto('Kohls.com',30,22,0,0,$arial,$black,6,0,0);
        
        texto('SIZE  '.$SIZE,0,14,3,-70,$arial,$black,8,0,0);
        
        texto($COLORCODE,76,28,0,0,$arial,$black,6.5,0,0);
        texto($COLOR,92,28,0,0,$arial,$black,6.5,0,0);
        
        texto('STYLE:',76,40,0,0,$arial,$black,7,0,0);
        texto($STYLE,110,40,0,0,$arial,$black,7,0,0);
        
        texto($DEPT,0,50,3,26,$ocrB_SB,$black,7,0,0);
        
        texto($CLASS,0,50,3,-32,$ocrB_SB,$black,7,0,0);
        
        texto($SUB,0,50,3,-90,$ocrB_SB,$black,7,0,0);
        
        texto(formatizarTexto('1         23456    12345         1',$UPC),58,85,0,0,$arial,$black,7,0,0);
        
        texto($PRICE,0,185,1,0,$arialBold,$black,9,270,1);
        
        texto($DEPARTMENT,0,95,1,0,$arial,$black,6,0,0);
        
       
        // Creacion del Barcode
        barcode($UPC,60,54,1,27,'UPC');
        
        barcodeTexto(-1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
