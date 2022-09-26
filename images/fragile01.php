<?php                       //   1       2       3     4     5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'A50029010CL');
        $COLOR = asignar(2,'IM8');
        $SIZE = asignar(3,'XXS');
        $UPC = asignar(4,'884616098831');
        $PRICE = asignar(5,'98.00');
        
        // Creacion del formato
        formato(150,187,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('STYLE: '.$STYLE,0,25,1,0,$arial,$black,8,0,0);
        
        texto('COLOR: '.$COLOR,0,40,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,140,1,0,$arial,$black,10,0,0);
        
        texto('MSRP: $'.sinSigno($PRICE),0,175,1,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,50,1,50,'UPC');
        
        barcodeTexto(2,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
