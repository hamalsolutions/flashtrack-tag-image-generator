<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PEBBL');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'RM13-1073');
        $UPC = asignar(4,'885347077119');
        $PRICE = asignar(5,'52.00');
        $DESCRIPTION = asignar(6,'HOTEL MOTEL CREW');
        
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
            texto($COLOR,0,60,2,15,$arial,$black,7,0,0);
            texto($STYLE,10,60,0,0,$arial,$black,7,0,0);
        }
        else
        {
            texto($COLOR,0,60,2,5,$arial,$black,6,0,0);
            texto($STYLE,10,60,0,0,$arial,$black,6,0,0);
        }
        
        //texto('LOT: '.$LOT,10,70,0,0,$arial,$black,7,0,0);
        
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
        
        texto($DESCRIPTION,0,180,1,0,$arialBold,$black,7,0,0);
        
        texto($SIZE,0,205,1,0,$arialBold,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,65,1.2,90,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
