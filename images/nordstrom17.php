<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','COLOR','SIZE','STYLE','EAN13','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'A');
        $SIZE = asignar(2,'1');
        $STYLE = asignar(3,'14210110802');
        $EAN13 = asignar(4,'8718333425484');
        $PRICE = asignar(5,'239.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
            // Introducimos los datos
        
        agujero(75, 25);
        
        texto('Style',25,75,0,0,$arial,$black,8,0,0);
        texto($STYLE,10,87,0,0,$arial,$black,7.5,0,0);
        
        texto('Color',105,75,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,87,3,-80,$arial,$black,7.5,0,0);
        
        texto('Size',0,112,1,0,$arial,$black,8,0,0);
        texto($SIZE,0,125,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,250,1,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($EAN13,10,120,1.2,70,'EAN');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>