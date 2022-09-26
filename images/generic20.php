<?php                      //   1      2
    $correctos = array('QTY', 'UPC','MSRP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC  = asignar(1,'614141999996');
        $MSRP = asignar(2,'29.90');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');

        // Introducimos los datos
        texto('MSRP: $'.sinSigno($MSRP),0,130,1,0,$arialBold,$black,12,0,0);

        // Creacion del Barcode
        barcode($UPC,15,20,1.1,70,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>