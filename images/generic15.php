<?php                      //   1
    $correctos = array('QTY','ITEM#');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $ITEM = asignar(1,'6123456');

            // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('PLN '.$ITEM,0,55,1,0,$arialBold,$black,12,0,0);

        
        // Creacion del Barcode
        barcode($ITEM,19,65,1.2,50,'128');
        
        require_once('../includes/footer.php');
    }
?>