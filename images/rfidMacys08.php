<?php                      //   1       2      3      4      5 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'D18024309');
        $COLOR = asignar(2,'RED');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'490320705844');
        $PRICE = asignar(5,'$48.00');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        $pinkLogo = fuente('Pink-n-Violet_Logo2.ttf');
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',0,37,2,10,$logo,$black,22,0,0);

        texto('ZUNIE',0,80,1,0,$arialBold,$black,12,0,0);

        texto('P',0,110,1,0,$pinkLogo,$black,42,0,0);
        
        texto($STYLE,10,130,0,0,$arialBold,$black,6,0,0);
        
        texto($COLOR,0,130,2,10,$arialBold,$black,6,0,0);
        
        texto($SIZE,0,250,2,10,$arialBold,$black,14,0,0);
        
        texto('MSRP ',30,310,0,0,$arialBold,$black,9,0,0);
        texto($PRICE,68,310,0,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,135,1,60,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
