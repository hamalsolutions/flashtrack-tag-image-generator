<?php                    //         1         2       3          4        5      6 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'J3124-76');
        $COLOR = asignar(2,'JADE CAMO');
        $SIZE = asignar(3,'1');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'20.00');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos
                
        agujero(84, 30);
        imageline($img,0,45,168,45,$black);
        
        texto('STYLE '.$STYLE,0,70,1,0,$arial,$black,9,0,0);
        
        imageline($img,0,95,168,95,$black);
        
        imageline($img,0,165,168,165,$black);
        
        texto('COLOR/SIZE',20,183,0,0,$arialNarrowBold,$black,7,0,0);
        
        texto($COLOR,20,195,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($SIZE,30,215,0,0,$arialBold,$black,18,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,90,1.1,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
