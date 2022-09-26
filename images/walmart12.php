<?php                      //      1        2       3  
    $correctos = array('QTY','DEPARTMENT','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'34');
        $UPC = asignar(2,'715209954640');
        $PRICE = asignar(3,'$120.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('WalMart_Logo.ttf');
        
        // Introducimos los datos
        
        texto('w',0,55,1,0,$logo,$black,28,0,0);
        
        texto($DEPT,20,75,0,0,$arial,$black,13,0,0);
        
        texto($PRICE,0,207,1,0,$arialBold,$black,17,0,1);
        
        texto('PRECIOS BAJOS TODOS',0,228,1,0,$arial,$black,8,0,0);
        texto('LOS DIAS',0,240,1,0,$arial,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,17,120,1,48,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
