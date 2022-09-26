<?php                    //    1       2         3           4
    $correctos = array('QTY','PO#','ITEM#','DESCRIPTION','PREPACK');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PO = asignar(1,'7CN654321');
        $ITEM = asignar(2,'6123456');
        $DESCRIPTION = asignar(3,'Bird feeder w Therm');
        $PREPACK = asignar(4,'12');

        // Creacion del formato
        formato(400,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
        setAsSticker(15);

        texto('PO:  '.$PO,0,50,1,0,$arialBold,$black,12,0,0);
        texto('PLN: '.$ITEM,0,80,1,0,$arialBold,$black,12,0,0);

        texto($DESCRIPTION,0,240,1,0,$arialBold,$black,12,0,0);
        texto('QTY '.$PREPACK,0,265,1,0,$arialBold,$black,12,0,0);
        texto('MC    of',0,290,1,0,$arialBold,$black,12,0,0);

        // Creacion del Barcode
        barcode($ITEM,25,35,2.8,180,'128');

        require_once('../includes/footer.php');
    }
?>