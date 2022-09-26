<?php                    //      1       2          3       
    $correctos = array('QTY','BARCODE','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $BARCODE = asignar(1,'509-CLO-ALLT-SM');
        $SIZE = asignar(2,'S');
        $DESCRIPTION = asignar(3,'EVOLUTION T-SHIRT');
        
        
            // Creacion del formato
        formato(180,122,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $hatten = fuente('hatten.ttf');
       
        // Introducimos los datos
        
        $size2 = $SIZE;
        
        switch($SIZE){
            case 'SMALL':   $size2 = 'S';
                        break;
            case 'MEDIUM':  $size2 = 'M';
                        break;
            case 'LARGE':   $size2 = 'L';
                        break;
            case 'XLARGE':  $size2 = 'XL';
                        break;
            case 'XXLARGE': $size2 = 'XXL';
                        break;
            case 'XXXLARGE': $size2 = 'XXXL';
                        break;
        }
        
        texto($DESCRIPTION,0,25,1,0,$arialNarrowBold,$black,13,0,0);
        
        texto($BARCODE,0,95,1,0,$arial,$black,10,0,0);
        
        texto('SIZE: '.$size2,0,113,1,0,$arialBold,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($BARCODE,17,30,1,50,'93');
        
        require_once('../includes/footer.php');
    }
?>
