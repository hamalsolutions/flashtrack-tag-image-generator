<?php                      //  1     2      3       4       5       6
    $correctos = array('QTY','UPC','DEPT','SIZE','COLOR','STYLE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'881759000004');
        $DEPT = asignar(2,'059');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'CHA');
        $STYLE = asignar(5,'B3113JT');
        $PRICE = asignar(6,'$12.50');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('nordstrom_2010.ttf');
                
        // Introducimos los datos
        
        texto('N',0,60,1,0,$logo,$black,23,0,0);
        
        texto($STYLE,10,75,0,0,$arialBold,$black,11,0,0);
        
        texto($COLOR,10,98,0,0,$arialBold,$black,12,0,0);
        
        switch ($SIZE){
            case 'small':
            case 'S':   $SIZE = 'SMALL';
                        break;
            case 'medium':
            case 'M':   $SIZE = 'MEDIUM';
                        break;
            case 'large':
            case 'L':   $SIZE = 'LARGE';
                        break;
            case 'xlarge':
            case 'XL':   $SIZE = 'XLARGE';
                        break;
            case 'xxlarge':
            case 'XXL':   $SIZE = 'XXLARGE';
                        break;
        }
        
        texto('Size:',10,182,0,0,$arialBold,$black,12,0,0);
        texto($SIZE,55,182,0,0,$arialBold,$black,11,0,0);
        
        texto('Dept:',10,206,0,0,$arialBold,$black,12,0,0);
        texto($DEPT,61,206,0,0,$arialBold,$black,12,0,0);
        
        texto($PRICE,0,290,2,10,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,85,1.2,60,'UPC');
        
        barcodeTexto(1,0,0,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
