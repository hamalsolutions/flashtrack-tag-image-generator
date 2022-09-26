<?php                    //     1        2     3      4      5
    $correctos = array('QTY','DESIGN','COLOR','SKU','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESIGN = asignar(1,'No One Cares, Work Harder');
        //$DESIGN = asignar(1,'No One Cares, Work HarderHHHHHHHH');
        $COLOR = asignar(2,'Black');
        $SKU = asignar(3,'SM-WORKBLK');
        $UPC = asignar(4,'688099507336');
        $PRICE = asignar(5,'40 RETAIL');
        
            // Creacion del formato 
        formato(150,100,255,255,255);
        setAsSticker(12);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialB = fuente('arialbd.ttf');
        $arialN = fuente('arialn.ttf');
        // Introducimos los datos

        if (strlen($DESIGN)<=27) {
            texto($DESIGN,5,13,0,0,$arial,$black,7,0,0);
        } else {
            texto($DESIGN,5,13,0,0,$arialN,$black,7,0,0);
        }

        texto($COLOR,5,26,0,0,$arial,$black,7,0,0);
        //texto('SKU:  '.$SKU,5,40,0,0,$arial,$black,7,0,0);
        texto('SKU:  '.str_replace('-',' -',$SKU),5,40,0,0,$arial,$black,7,0,0);
        texto($PRICE,0,96,1,0,$arialB,$black,7,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,45,1,30,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
