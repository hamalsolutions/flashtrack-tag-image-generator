<?php                      //     1        2             3           4         5        6
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'6234-OA');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$19.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('boscovsLogo.ttf');
        
        
        // Introducimos los datos
        agujero(84, 25);
        
        texto('B',0,55,1,0,$logo,$black,26,0,0);
        
        texto('STYLE',20,80,0,0,$arial,$black,8,0,0);
        texto($STYLE,0,90,3,100,$arial,$black,7,0,0);
        
        texto('COLOR',120,80,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,90,2,15,$arial,$black,7,0,0);
        
        texto('SIZE',130,108,0,0,$arial,$black,8,0,0);
        texto($SIZE,0,118,2,15,$arial,$black,7,0,0);
        
        perforacion();
        
        texto($PRICE,0,275,1,0,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,97,1.3,82,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
