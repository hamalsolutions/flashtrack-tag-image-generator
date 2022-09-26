<?php                      //   1      2       3      4         5          6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE','TRACKING');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'ROYAL');
        $SIZE = asignar(2,'LARGE');
        $STYLE = asignar(3,'6586-GM');
        $UPC = asignar(4,'757322699268');
        $DESCRIPTION = asignar(5,'GREATEST MOM POSTER V2');
        $PRICE = asignar(6,'12.99');
        $TRACKING = asignar(7,'1523468');
        
        // Creacion del formato
        formato(300,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,0,40,1,0,$arial,$black,7,270,0);
        
        texto($COLOR,0,55,2,30,$arial,$black,7,270,0);
        
        texto($STYLE,0,65,2,30,$arial,$black,7,270,0);
        
        texto($TRACKING,0,77,2,30,$arial,$black,7,270,0);
        
        
        texto($SIZE,0,250,1,0,$arial,$black,10,270,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,14,270,1);
        
        // Creacion del Barcode
        barcode($UPC,35,245,1.3,65,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
