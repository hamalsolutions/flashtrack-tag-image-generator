<?php                      //   1      2       3      4      5          6
    $correctos = array('QTY','SIZE','STYLE','UPC','COLOR','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $STYLE = asignar(2,'168-LB');
        $UPC = asignar(3,'884411849478');
        $COLOR = asignar(4,'LT. BLUE');
        $PRICE = asignar(5,'32.00');
        $DESCRIPTION = asignar(6,'PREMIUM GREYLIGHT LOGO');
                       
            // Creacion del formato
        formato(150,187,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('PELAGIC_LOGO.ttf');
        
        // Introducimos los datos
        
        texto('P',0,20,1,0,$logo,$black,26,0,0);
        
        texto($DESCRIPTION,0,30,1,0,$arialBold,$black,7,0,0);
        
        texto('STYLE',12,45,0,0,$arial,$black,8,0,0);
        texto($STYLE,12,55,0,0,$arialBold,$black,8,0,0);
        
        texto('COLOR',0,45,2,12,$arial,$black,8,0,0);
        texto($COLOR,0,55,2,10,$arialBold,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,0,150,1,0,$arialBold,$black,12,0,0);
        
        texto($PRICE,0,170,1,0,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,65,1,50,'UPC');
        barcodeTexto(1, 0, -5, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>