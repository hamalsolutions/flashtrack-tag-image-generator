<?php                      //   1        2      3      4
    $correctos = array('QTY', 'STYLE','COLOR','UPC','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2931');
        $COLOR = asignar(2,'13');
        $UPC = asignar(3,'091796311357');
        $SIZE = asignar(4,'2XL');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        texto('TRAIL CREST',0,20,1,0,$arial,$black,10,0,0);

        texto('STYLE#:'.$STYLE,15,40,0,0,$arial,$black,8,0,0);

        texto('COLOR:'.$COLOR,15,55,0,0,$arial,$black,8,0,0);

        texto('SIZE '.$SIZE,0,140,1,0,$arial,$black,10,0,0);

        // Creacion del Barcode
        barcode($UPC,10,55,1.1,55,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>