<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WOZJ13286NBN2');
        $COLOR = asignar(2,'SILVER');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$26.95');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        texto('STYLE',15,70,0,0,$arial,$black,8,0,0);
        texto($STYLE,60,70,0,0,$arial,$black,8,0,0);
        
        texto('COLOR',15,87,0,0,$arial,$black,8,0,0);
        parrafo($COLOR, 59, 87, 0, 0, $arial, $black, 8, 0, 15, 12);
        
        texto('SIZE',15,115,0,0,$arial,$black,9,0,0);
        texto($SIZE,48,115,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,260,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,25,140,1,60,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
