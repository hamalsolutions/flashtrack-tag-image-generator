<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'WWRD2284');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'18.00');
        $DEPT = asignar(6,'154');
        $CLASS = asignar(7,'272');
        
        switch($SIZE)
        {
            case 'SMALL': $SIZE='SML';
                            break;
            case 'MEDIUM': $SIZE='MED';
                            break;
            case 'LARGE': $SIZE='LRG';
                            break;
            case 'X-LARGE': $SIZE='XLG';
                            break;
            case '2X-LARGE': $SIZE='XXL';
                            break;
            case 'XX-LARGE': $SIZE='XXL';
                            break;
            case 'XXLARGE': $SIZE='XXL';
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
        
        texto('STYLE',20,65,0,0,$arial,$black,9,0,0);
        texto($STYLE,0,80,3,90,$arial,$black,7,0,0);
        
        texto('COLOR',92,65,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,80,3,-55,$arial,$black,7,0,0);
        
        texto('DEPT',15,105,0,0,$arial,$black,9,0,0);
        texto($DEPT,50,105,0,0,$arial,$black,9,0,0);
        
        texto('CLASS',85,105,0,0,$arial,$black,9,0,0);
        texto($CLASS,129,105,0,0,$arial,$black,9,0,0);
        
        texto('SIZE:',20,149,0,0,$arial,$black,10,0,0);
        texto($SIZE,80,149,0,0,$arial,$black,25,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,19,0,1);
        
        // Creacion del Barcode
        barcode($UPC,27,170,1,65,'UPC');
        
        barcodeTexto(4,-2,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
