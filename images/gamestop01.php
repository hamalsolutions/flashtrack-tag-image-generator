<?php                      //      1          2      3      4      5     6
    $correctos = array('QTY','DESCRIPTION','STYLE','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'T-SAILOR STAR BLACK');
        $STYLE = asignar(2,'JUNIOR S/S TEE');
        $SIZE = asignar(3,'Small');
        $UPC = asignar(4,'123456789128');
        //$PRICE = asignar(5,'$6.75');
        //$CODE = asignar(6,'FL_1');
                       
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        $size = str_replace(' ','',$SIZE);
        $size = str_replace('-','',$size);
        $size = strtoupper($size);
        $shortSize = '';
        switch($size){
            case 'SMALL':      $shortSize = '-S';
                                break;
            case 'MEDIUM':     $shortSize = '-M';
                                break;
            case 'LARGE':      $shortSize = '-L';
                                break;
            case 'XLARGE':     $shortSize = '-XL';
                                break;
            case 'XXLARGE':    $shortSize = '-XXL';
                                break;
            case 'XXXLARGE':   $shortSize = '-XXXL';
                                break;
                            default:    $shortSize = '-'.$size;
        }

        parrafo($DESCRIPTION,0,40,1,0,$arialNarrow,$black,8,0,24,10);
        
        texto($STYLE,0,65,1,0,$arialNarrow,$black,8,0,0);
        
        texto($SIZE,0,183,1,0,$arialBold,$black,14,0,0);
        
        //texto($PRICE,0,290,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,17,75,1,82,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
