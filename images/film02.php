<?php                      //   1      2       3      4  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'1F509006');
        $UPC = asignar(4,'885347917637');
        
        // Creacion del formato
        formato(125,238,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        switch($SIZE)
        {
            case 'SMALL':   $SIZE = 'S';
                            break;
            case 'MEDIUM':  $SIZE = 'M';
                            break;
            case 'LARGE':   $SIZE = 'L';
                            break;
            case 'XLARGE':  $SIZE = 'XL';
                            break;
            case 'XXLARGE': $SIZE = 'XXL';
                            break;
        }
        
        texto('SIZE',0,27,1,0,$arial,$black,9,0,0);
        texto($SIZE,0,45,1,0,$timesNewRomanBold,$black,14,0,0);
        
        texto($COLOR,10,65,0,0,$arial,$black,9,0,0);
        
        texto('STYLE#',10,80,0,0,$arial,$black,7,0,0);
        texto($STYLE,47,80,0,0,$arial,$black,7,0,0);
        
        texto(formatizarTexto('12  345  67  8901  2',$UPC),0,149,1,0,$arial,$black,8,0,0);
           
        
        // Creacion del Barcode
        barcode($UPC,5,96,1,40,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
