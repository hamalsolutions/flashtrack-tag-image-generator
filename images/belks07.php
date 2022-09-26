<?php                    //         1         2       3          4        5      6 
    $correctos = array('QTY','VENDOR STYLE','COLOR','SIZE','STYLE NAME','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $VENDORSTYLE = asignar(1,'K60242-BTAS2101');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'XS');
        $STYLENAME = asignar(4, 'STREET STYLE 4');
        $UPC = asignar(5,'123456789128');
        $PRICE = asignar(6,'39.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos
                
        agujero(84, 25);
        
        parrafoArriba($VENDORSTYLE,10,53,$arialNarrowBold,$black,8);
        
        texto($COLOR,0,53,2,10,$arialNarrowBold,$black,8,0,0);
        
        texto($SIZE,0,185,1,0,$arialBold,$black,18,0,0);
        
        texto($STYLENAME,0,230,1,0,$arialBold,$black,10,0,0);
        
        perforacion();
        
        texto("MANUFACTURE'S",10,268,0,0,$arialNarrowBold,$black,7,0,0);
        texto('SUGGESTED',10,278,0,0,$arialNarrowBold,$black,7,0,0);
        texto('RETAIL PRICE',10,289,0,0,$arialNarrowBold,$black,7,0,0);
        
        texto($PRICE,0,280,2,10,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,55,1.1,95,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
