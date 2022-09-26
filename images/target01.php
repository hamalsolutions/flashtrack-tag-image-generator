<?php                      //   1      2       3      4      5      6       7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','ITEM');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'YELLOW');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'2YDME031TF');
        $UPC = asignar(4,'885347090125');
        $PRICE = asignar(5,'18.00');
        $DEPT = asignar(6,'0033');
        $CLASS = asignar(7,'013');
        $ITEM = asignar(8,'3531');
                       
            // Creacion del formato
        formato(125,238,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        
        switch($SIZE) {
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
        
        $margen = strlen($STYLE)>10?5:0;
        $fontSize = strlen($COLOR)<14?9:8;
        
        texto('SIZE',0,27,1,0,$arial,$black,9,0,0);
        texto($SIZE,0,45,1,0,$timesNewRomanBold,$black,14,0,0);
        
        texto($COLOR,(15-$margen),60,0,0,$arial,$black,$fontSize,0,0);
        
        texto('STYLE#',(15-$margen),70,0,0,$arial,$black,7,0,0);
        texto($STYLE,(53-$margen),70,0,0,$arial,$black,7,0,0);
        
        texto($DEPT,0,83,3,70,$arial,$black,8,0,0);
        
        texto($CLASS,0,83,1,0,$arial,$black,8,0,0);
        
        texto($ITEM,0,83,3,-80,$arial,$black,8,0,0);
        
        texto('DEPT         CL           ITEM',17,93,0,0,$arial,$black,6,0,0);
        
        texto(formatizarTexto('12  345  67  8901  2',$UPC),0,149,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,195,1,0,$arial,$black,14,0,1);
           
        
        // Creacion del Barcode
        barcode($UPC,6,95,1,40,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
