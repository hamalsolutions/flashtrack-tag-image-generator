<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','ITEM','SIZE','UPC','PRICE','COLOR','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'HK8010635');
        $ITEM = asignar(2,'2095');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$8.99');
        $COLOR = asignar(6,'HGR');
        $DEPT = asignar(7,'076');
        $CLASS = asignar(8,'06');
        
            // Creacion del formato
        formato(125,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('SIZE',0,55,1,0,$arial,$black,10,0,0);
        texto($SIZE,0,70,1,0,$arialBold,$black,11,0,0);
        
        texto($COLOR,15,95,0,0,$arialBold,$black,10,0,0);
        
        texto('STYLE',15,112,0,0,$arial,$black,7,0,0);
        texto($STYLE,50,112,0,0,$arial,$black,7.5,0,0);
        
        texto($ITEM ,0,130,3,-70,$arial,$black,8,0,0);        
        texto('ITEM',85,142,0,0,$arial,$black,8,0,0);
        
        texto($DEPT ,0,130,3,70,$arial,$black,8,0,0);        
        texto('DEPT',15,142,0,0,$arial,$black,8,0,0);
        
        texto($CLASS,0,130,1,0,$arial,$black,8,0,0);        
        texto('CL',0,142,1,0,$arial,$black,8,0,0);
        
        texto(formatizarTexto('123456  123456', $UPC),0,220,1,0,$arial,$black,9,0,0);
        
        perforacion(125, 275, 235);
        
        texto($PRICE,0,265,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,6,150,1,55,'UPC');
        
        //barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
