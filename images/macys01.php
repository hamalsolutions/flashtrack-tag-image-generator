<?php                       //  1     2     3       4    
    $correctos = array('QTY','STYLE','UPC','SIZE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'JKEU3M5322');
        $UPC = asignar(2,'001234567895');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'ASH GREY/SPICED RED');
        
        // Creacion del formato
        formato(150,100,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
        texto($STYLE,1,17,1,0,$arial,$black,8,0,0);

        texto($COLOR,1,27,1,0,$arial,$black,8,0,0);        

        texto($SIZE,1,39,1,0,$arial,$black,8,0,0);        

        // Creacion del Barcode
        barcode($UPC,17,42,1,40,'UPC');
        
        barcodeTexto(2,-1,0,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>