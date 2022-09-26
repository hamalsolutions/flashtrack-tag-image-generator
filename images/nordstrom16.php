<?php                     //    1     2           3          4      5
    $correctos = array('QTY','EAN13','STYLE','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $EAN13 = asignar(1,'8718333425545');
        $STYLE = asignar(2,'14210110802');
        $COLOR = asignar(3,'B');
        $SIZE = asignar(4,'3');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('nordstrom_2010.ttf');
        
            // Introducimos los datos
        
        texto('N',0,26,1,0,$logo,$black,18,0,0);
        
        texto($STYLE,15,47,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,15,65,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,15,85,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($EAN13,10,63,1.5,110,'EAN');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
