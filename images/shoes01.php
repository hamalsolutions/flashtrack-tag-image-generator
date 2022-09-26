<?php                       //   1       2          3      4        5      6
    $correctos = array('QTY','STYLE','DESCRIPTION','UPC','PRICE','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'401-0525');
        $DESCRIPTION = asignar(2,'Savannah Wing tip');
        $UPC = asignar(3,'651392185181');
        $PRICE = asignar(4,'350.00');
        $COLOR = asignar(5,'BROWN');
        $SIZE = asignar(6,'8.5');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto('Style:',10,13,0,0,$arial,$black,7,0,0);
        texto($STYLE,10,25,0,0,$arialNarrow,$black,10,0,0);
        
        texto('Color:',160,13,0,0,$arial,$black,7,0,0);
        texto($COLOR,0,25,2,12,$arial,$black,9,0,0);
        
        texto('Description:',10,43,0,0,$arial,$black,7,0,0);
        texto($DESCRIPTION,10,55,0,0,$arialNarrow,$black,10,0,0);
        
        texto('Size:',10,80,0,0,$arial,$black,7,0,0);
        texto($SIZE,35,89,0,0,$arialNarrow,$black,18,0,0);
        
        texto($PRICE,0,155,3,110,$arialNarrow,$black,13,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,75,115,1,65,'UPC');
        
        barcodeTexto(2,-1,-1,3,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
