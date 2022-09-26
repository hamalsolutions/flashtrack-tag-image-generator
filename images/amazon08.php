<?php                       //   1       2       3     4 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'08ATM002');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884616098831');
        
        // Creacion del formato
        formato(150,187,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('SIZE',10,25,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,35,3,100,$arial,$black,9,0,0);
        
        texto($STYLE,0,25,2,10,$arial,$black,9,0,0);
        
        texto($COLOR,0,55,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,68,1,70,'UPC');
        
        barcodeTexto(2,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
