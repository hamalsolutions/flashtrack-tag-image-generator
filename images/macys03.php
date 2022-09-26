<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','SIZE','ITEM','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'L');
        $ITEM = asignar(2,'TK0YDTGEN');
        $UPC = asignar(3,'123456789128');
        $PRICE = asignar(4,'19.50');
        
        /*
        switch($SIZE) {
            case 'X-SMALL': $SIZE='XS';
                            break;
            case 'SMALL': $SIZE='S';
                            break;
            case 'MEDIUM': $SIZE='M';
                            break;
            case 'LARGE': $SIZE='L';
                            break;
            case 'X-LARGE': $SIZE='XL';
                            break;
        }
        */
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto($ITEM,10,57,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,202,2,20,$arialBold,$black,17,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,55,1.3,110,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
