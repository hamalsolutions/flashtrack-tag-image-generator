<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'1WRD');
        $UPC = asignar(4,'885347077119');
        $PRICE = asignar(5,'7.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        if (strlen($COLOR)<13)
        {
            texto($COLOR,0,65,2,15,$arial,$black,7,0,0);
            texto($STYLE,10,65,0,0,$arial,$black,7,0,0);
        }
        else
        {
            texto($COLOR,0,65,2,5,$arial,$black,6,0,0);
            texto($STYLE,10,65,0,0,$arial,$black,6,0,0);
        }
        
        switch($SIZE)
        {
            case 'SMALL': $SIZE='S';
                            break;
            case 'SM': $SIZE='S';
                            break;
            case 'MEDIUM': $SIZE='M';
                            break;
            case 'MD': $SIZE='M';
                            break;
            case 'LARGE': $SIZE='L';
                            break;
            case 'LG': $SIZE='L';
                            break;
            case 'X-LARGE': $SIZE='XL';
                            break;
            case 'XLG': $SIZE='XL';
                            break;
            case '2X-LARGE': $SIZE='2XL';
                            break;
            case 'XXLARGE': $SIZE='2XL';
                            break;
            case 'XXLG': $SIZE='2XL';
                            break;
        }
        
        texto('SIZE',15,170,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,47,180,0,0,$arialBold,$black,16,0,0);
        
        texto($PRICE,0,230,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,65,1.2,75,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
