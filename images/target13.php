<?php                       //   1       2          3      4        5      6
    $correctos = array('QTY','STYLE','UPC','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'41048');
        $UPC = asignar(2,'846932000011');
        $COLOR = asignar(3,'BLACK');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');

        // Introducimos los datos
        setAsSticker(15);
        
        texto('STYLE',15,25,0,0,$arialNarrow,$black,9,0,0);        
        texto($STYLE,15,40,0,0,$arialNarrow,$black,9,0,0);        

        texto('COLOR',0,25,2,15,$arialNarrow,$black,9,0,0);     
        texto($COLOR,0,40,2,15,$arialNarrow,$black,9,0,0);     
    
        // Creacion del Barcode
        barcode($UPC,12,51,1.1,70,'UPC');
        
        barcodeTexto(2,0,-1,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
