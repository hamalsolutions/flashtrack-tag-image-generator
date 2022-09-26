<?php                     //   1       2       3      4  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'12345');
        $UPC = asignar(4,'000123456784');
                       
            // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('tapoutLogo.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,9,110,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,110,2,5,$arialNarrow,$black,8,0,0);
        
        texto($SIZE,0,217,1,0,$arialBold,$black,15,0,0);
        
         // Creacion del Barcode
        barcode($UPC,5,115,1,70,'UPC');
        
        barcodeTexto(2,0,-2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
