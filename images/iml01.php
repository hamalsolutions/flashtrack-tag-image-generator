<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','SIZE','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'(4/5)');
        $STYLE = asignar(2,'SM3720803WT');
        $UPC = asignar(3,'123456789128');
                
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,5,35,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,35,2,10,$arial,$black,9,0,0);
                                                     
        // Creacion del Barcode
        barcode($UPC,15,35,1.4,75,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
