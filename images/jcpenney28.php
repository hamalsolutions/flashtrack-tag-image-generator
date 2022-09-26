<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','LOT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'1WRD');
        $UPC = asignar(4,'885347077119');
        $PRICE = asignar(5,'7.99');
        $LOT = asignar(6,'2547');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Hybrid Tees',0,55,1,0,$arial,$black,12,0,0); 
        
        if (strlen($COLOR)<13)
        {
            texto($COLOR,0,75,2,15,$arial,$black,7,0,0);
            texto($STYLE,10,75,0,0,$arial,$black,7,0,0);
        }
        else
        {
            texto($COLOR,0,75,2,5,$arial,$black,6,0,0);
            texto($STYLE,10,75,0,0,$arial,$black,6,0,0);
        }
        
        texto('LOT: '.$LOT,10,85,0,0,$arial,$black,7,0,0);
        
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
        
        texto('SIZE',35,200,0,0,$arialBold,$black,14,0,0);
        
        texto($SIZE,0,200,3,-45,$arialBold,$black,14,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,75,1.2,85,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
