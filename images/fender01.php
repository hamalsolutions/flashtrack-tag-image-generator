<?php                      //   1      2        3           4      5
    $correctos = array('QTY','PART#','UPC','DESCRIPTION','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PART = asignar(1,'9110009409');
        $UPC = asignar(2,'885347467323');
        $DESCRIPTION = asignar(3,'FENDER BUILT 2 INSPIRE TEE');
        $COLOR = asignar(4,'RED');
        $SIZE = asignar(5,'M');
        
        // Creacion del formato
        formato(300,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION.' - '.$COLOR.' - '.$SIZE,0,82,1,0,$arial,$black,9,0,0);
        
        texto('P.N. '.$PART,0,96,1,0,$arial,$black,10,0,0);
                
        // Creacion del Barcode
        barcode($UPC,43,5,1.5,52,'UPC');
        
        barcodeTexto(1, 0, 0, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>