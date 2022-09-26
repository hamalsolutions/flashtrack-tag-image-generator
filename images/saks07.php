<?php                    //    1        2     3     4       5       6   
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','COMPARE PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'9499');
        $SIZE = asignar(2,'27');
        $STYLE = asignar(3,'PR320731CSS');
        $UPC = asignar(4,'800601654653');
        $PRICE = asignar(5,'99.99');
        $COMPARE = asignar(6,'148.00');
        $DEPT = asignar(7,'833');
        
        // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
                
        // Introducimos los datos
        texto($DEPT,0,64,1,0,$arialBold,$black,8,0,0);
        
        texto($STYLE,0,80,1,0,$arialBold,$black,8,0,0);
        
        texto($COLOR,0,95,1,0,$arialBold,$black,8,0,0);
        
        texto('SIZE',0,110,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,127,1,0,$arialBold,$black,8,0,0);
        
        texto('VALUE',0,230,1,0,$arialBold,$black,7,0,0);
        
        texto($COMPARE,0,260,1,0,$arialBoldSlash,$black,10.5,0,1);
        
        texto($PRICE,0,290,1,0,$arialBold,$black,13.5,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,7,115,1.2,78,'UPC');
        
        barcodeTexto(2,-1,1,7,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
