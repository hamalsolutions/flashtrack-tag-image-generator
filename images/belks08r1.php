<?php                    //     1       2      3      4      5          6
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'J3124-76');
        $COLOR = asignar(2,'JADE CAMO');
        $SIZE = asignar(3,'1');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'20.00');
        $GROUPNAME = asignar(6,'GROUP NAME');

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

        texto($GROUPNAME,0,55,1,0,$arial,$black,9,0,0);

        imageline($img,0,58,168,58,$black);
        
        texto('STYLE '.$STYLE,0,75,1,0,$arial,$black,9,0,0);
        
        imageline($img,0,100,168,100,$black);
        
        imageline($img,0,170,168,170,$black);
        
        texto('COLOR/SIZE',20,188,0,0,$arialNarrowBold,$black,7,0,0);
        
        texto($COLOR,20,200,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto($SIZE,30,220,0,0,$arialBold,$black,18,0,0);
        
        perforacion();
        
        texto($PRICE,0,290,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,95,1.1,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
