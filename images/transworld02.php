<?php                      //      1          2     3
    $correctos = array('QTY','DESCRIPTION','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'T-Edward Cullen');
        $SIZE = asignar(2,'Small');
        $UPC = asignar(3,'123456789128');
                       
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
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
        }
        
        texto($DESCRIPTION.$shortSize,0,20,1,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,0,95,1,0,$arialBold,$black,13,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,42,25,1,45,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
