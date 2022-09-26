<?php                      //   1      2       3      4     5       6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'L');
        $STYLE = asignar(3,'0087TG');
        $UPC = asignar(4,'619720171596');
        $DEPT = asignar(5,'0084');
        $PRICE = asignar(6,'18.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(85, 25);
        
        texto('PROJECT SOCIAL T',0,65,1,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,0,95,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,107,2,7,$arial,$black,8,0,0);
        
        texto(formatizarTexto('0         12345       67890        1',$UPC),0,175,1,0,$arial,$black,8,0,0);
        
        texto('Size:',15,197,0,0,$arial,$black,9,0,0);
        texto($SIZE,50,197,0,0,$arial,$black,9,0,0);
        
        texto('Dept:',15,215,0,0,$arial,$black,9,0,0);
        texto($DEPT,50,215,0,0,$arial,$black,9,0,0);
        
        
        perforacion(169, 300, 270);
        perforacion();
        
        texto($PRICE,0,287,2,7,$arialBold,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,13,103,1.2,62,'UPC');
        
        barcodeTexto(-1,0,0,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
