<?php                      //   1      2      3      4     5           6 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'90');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'MR1361');
        $UPC = asignar(4,'885681291783');
        $PRICE = asignar(5,'28.00');
        $DESCRIPTION = asignar(6,'M HURRICANE PT SS');
        
            // Creacion del formato
        formato(150,188,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        $times = fuente('times.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,0,100,1,0,$arialNarrow,$black,10.5,0,0);
        
        texto('STYLE:',35,120,0,0,$times,$black,8.5,0,0);
        texto($STYLE,80,120,0,0,$times,$black,8.5,0,0);
        
        texto('COLOR:',32,135,0,0,$times,$black,8.5,0,0);
        texto($COLOR,80,135,0,0,$times,$black,8.5,0,0);
        
        texto('SIZE:',46,150,0,0,$times,$black,8.5,0,0);
        texto($SIZE,80,150,0,0,$times,$black,8.5,0,0);
        
        texto('MSRP:',25,180,0,0,$arialNarrowBold,$black,12,0,0);
        texto($PRICE,0,180,3,-50,$arialBold,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,12,15,1.1,55,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
