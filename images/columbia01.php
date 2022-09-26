<?php                     //    1       2      3      4      5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1YBERD1303');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'SMALL');
        $UPC = asignar(4,'845550607190');
        $PRICE = asignar(5,'20');
        
        // Creacion del formato
        formato(188,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los campos de datos en el formato
        
        texto('STYLE',80,30,0,0,$arialBold,$black,7,270,0);
        texto($STYLE,80,40,0,0,$arialBold,$black,7,270,0);
        
        texto('COLOR',80,65,0,0,$arialBold,$black,7,270,0);
        texto($COLOR,80,75,0,0,$arialBold,$black,7,270,0);
        
        texto('SIZE:',80,100,0,0,$arialBold,$black,7,270,0);
        texto($SIZE,80,110,0,0,$arialBold,$black,7,270,0);
        
        texto(formatizarTexto('1          23456        12345         1',$UPC),25,70,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,95,170,0,0,$arialBold,$black,11,270,1);
        
       
        // Creacion del Barcode
        barcode($UPC,20,10,1.3,55,'UPC');
        
        barcodeTexto(-1,0,5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
