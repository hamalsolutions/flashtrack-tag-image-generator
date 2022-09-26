<?php                    //    1        2     3     4       5       6   
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','MSRP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'DARK BLUE');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'W00461655');
        $UPC = asignar(4,'800601654653');
        $PRICE = asignar(5,'25.00');
        $MSRP = asignar(6,'58.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
                
        // Introducimos los datos
        texto($STYLE,20,54,0,0,$arialBold,$black,10,0,0);
        
        texto($COLOR,20,80,0,0,$arialBold,$black,10,0,0);
        
        texto('SIZE',0,106,1,0,$arial,$black,7.5,0,0);
        
        cajaVacia(20,110,125,25,$black);
        texto($SIZE,0,127,1,0,$arialBold,$black,10,0,0);
        
        texto('VALUE',25,158,0,0,$arialBold,$black,10,0,0);
        
        texto($MSRP,25,182,0,0,$arialBoldSlash,$black,10.5,0,1);
        
        texto($PRICE,25,203,0,0,$arialBold,$black,10.5,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,15,185,1.2,78,'UPC');
        
        barcodeTexto(2,-1,1,7,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
