<?php                      //   1      2       3      4       5      6      7  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','CLASS','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE = asignar(2,'SML');
        $STYLE = asignar(3,'682-97730C');
        $UPC = asignar(4,'000000205634');
        $CLASS = asignar(5,'305');
        $DEPT = asignar(6,'221');
        $PRICE = asignar(7,'18.00');
                
        // Creacion del formato
        formato(200,350,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('DEPT',15,50,0,0,$arial,$black,10,0,0);
        texto($DEPT,55,50,0,0,$arial,$black,10,0,0);
        
        texto('CLASS '.$CLASS,0,50,2,15,$arial,$black,10,0,0);
        
        texto($STYLE,18,80,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,80,2,18,$arial,$black,9,0,0);
        
        
        switch($SIZE) {
            case 'SMALL':   $SIZE = 'SML';
                            break;
            case 'MEDIUM':  $SIZE = 'MED';
                            break;
            case 'LARGE':   $SIZE = 'LRG';
                            break;
            case 'XLARGE':  $SIZE = 'XLG';
                            break;
            case 'XXLARGE': $SIZE = 'XXL';
                            break;
        }
        texto($SIZE,0,245,1,0,$arialBold,$black,30,0,0);
        
        texto($PRICE,0,332,1,0,$arialBold,$black,17,0,1);
        
        
          // Creacion del Barcode
        barcode($UPC,20,70,1.3,120,'UPC');
        
        barcodeTexto(1,-1,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
