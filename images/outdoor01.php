<?php                       //   1       2          3      4
    $correctos = array('QTY','ITEM','DESCRIPTION','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $ITEM = asignar(1,'CLOA0732');
        $DESCRIPTION = asignar(2,'AMD T-HOME SWEET HOME');
        $UPC = asignar(3,'7-63184-10745-2');
        $PRICE = asignar(4,'14.99');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        $UPC = str_replace('-','',$UPC);
        
        texto($ITEM,10,105,0,0,$arialNarrow,$black,8,0,0);
        
        texto($DESCRIPTION,10,120,0,0,$arialNarrow,$black,8,0,0);
        
        texto($PRICE,0,140,1,0,$arial,$black,9,0,1);
        
        
       // Creacion del Barcode
        barcode($UPC,18,15,1,65,'UPC');
        
        barcodeTexto(2,-1,-3,8,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
