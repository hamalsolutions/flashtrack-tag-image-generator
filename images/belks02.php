<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'ROSE');
        $SIZE = asignar(2,'X-SMALL');
        $STYLE = asignar(3,'KSCDSMM');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'24.00');
        
        switch($SIZE)
        {
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
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,55,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,100,55,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,195,1,0,$arial,$black,13,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,13,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,55,1.3,105,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
