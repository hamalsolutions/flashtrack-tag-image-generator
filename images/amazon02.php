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
        formato(150,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto('SIZE',20,15,0,0,$arial,$black,7,0,0);
        texto($SIZE,0,25,3,90,$arial,$black,7,0,0);
        
        texto($STYLE,0,15,2,10,$arial,$black,7,0,0);
        
        texto($COLOR,0,35,1,0,$arial,$black,7,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,38,1,50,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
