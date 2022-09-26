<?php                       //   1       2          3      4        5      6
    $correctos = array('QTY','STYLE','DESCRIPTION','UPC','PRICE','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'102-8009');
        $DESCRIPTION = asignar(2,'John T Shirt');
        $UPC = asignar(3,'846932000011');
        $PRICE = asignar(4,'195.00');
        $COLOR = asignar(5,'RED BLUE');
        $SIZE = asignar(6,'S');
                       
            // Creacion del formato
        formato(150,78,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,15,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,10,25,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto($DESCRIPTION,10,35,0,0,$arialNarrow,$black,8,0,0);
        
        texto($SIZE,0,20,2,12,$arialBold,$black,11,0,0);
        
        texto($PRICE,0,76,1,0,$arialBold,$black,9,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,12,35,1.1,22,'UPC');
        
        barcodeTexto(1,0,-3,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
