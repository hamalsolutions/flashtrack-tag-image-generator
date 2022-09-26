<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'44025A0629');
        $COLOR = asignar(2,'Red');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$26.95');
        $DESCRIPTION = asignar(6,'Not Short Elf Size');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        texto('BOSCOV\'S',0,40,1,0,$arialBold,$black,11,0,0);
        
        texto($DESCRIPTION,0,60,1,0,$arial,$black,10,0,0);
        
        texto($STYLE,15,87,0,0,$arial,$black,8,0,0);
        texto($COLOR,100,87,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',15,205,0,0,$arial,$black,9,0,0);
        texto($SIZE,88,205,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,280,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,25,95,1,70,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
