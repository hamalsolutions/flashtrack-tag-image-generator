<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','ITEM','SIZE','UPC','PCS-SET');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'DIF810514A');
        $ITEM = asignar(2,'10346083001');
        $SIZE = asignar(3,'12M');
        $UPC = asignar(4,'846671011194');
        $PCS = asignar(5,'2PC SET');
        
            // Creacion del formato
        formato(125,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,70,1,0,$arial,$black,9,0,0);
        
        texto($ITEM,0,90,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,225,1,0,$arialBold,$black,14,0,0);
        
        perforacion(125, 275, 235);
        
        texto($PCS,0,262,1,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,6,110,1,55,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
