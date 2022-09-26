<?php                      //   1      2      3      4     5           6 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','GENDER');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'TURQ');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'JNWT180826SC');
        $UPC = asignar(4,'885347132467');
        $GENDER = asignar(5,'GIRL');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,60,1,0,$arial,$black,12,0,0);
        
        texto($COLOR,0,82,1,0,$arial,$black,12,0,0);
        
        texto($GENDER,0,200,1,0,$arial,$black,12,0,0);
        
        texto($SIZE,0,225,1,0,$arial,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,95,1.1,65,'UPC');
        
        barcodeTexto(4,0,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
