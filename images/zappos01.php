<?php                                     //   1           2            3              4            5
    $correctos = array('QTY','BRAND','SIZE','STYLE#','COLOR','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $BRAND = asignar(1,'NALLY & MILLIE');
        $SIZE = asignar(2,'XS');
        $STYLE = asignar(3,'Z018584');
        $COLOR = asignar(4,'ROYAL');
        $UPC = asignar(5,'841691072170');
        
            // Creacion del formato
        formato(150,188,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
                
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
                
        texto($BRAND,0,30,1,0,$arial,$black,11,0,0);
        
        texto($SIZE,10,55,0,0,$arial,$black,9,0,0);
        
        texto($STYLE,0,55,2,10,$arial,$black,9,0,0);
        
        texto($COLOR,0,75,1,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,17,90,1,65,'UPC');
        
        barcodeTexto(1,0,-5,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
