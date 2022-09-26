<?php                      //   1       2       3      4      5       6
    $correctos = array('QTY', 'STYLE','COLOR','SIZE','UPC', 'PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MT6655');
        $COLOR = asignar(2,'W4086 ST14926');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'190172282721');
        $PRICE = asignar(5,'49.00');

            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNB = fuente('arialnb.ttf');
        $arial = fuente('arial.ttf');

        // Introducimos los datos

        agujero(85,25);

        texto('STYLE',15,70,0,0,$arialNB,$black,8,0,0);
        texto($STYLE,65,70,0,0,$arialNB,$black,8,0,0);
        
        texto('COLOR',15,90,0,0,$arialNB,$black,8,0,0);
        texto($COLOR,65,90,0,0,$arialNB,$black,8,0,0);
        
        texto('SIZE',15,110,0,0,$arialNB,$black,8,0,0);
        texto($SIZE,65,110,0,0,$arialNB,$black,8,0,0);
        
        perforacion();
        texto($PRICE,0,280,1,0,$arial,$black,13,0,1);

        // Creacion del Barcode
        barcode($UPC,15,110,1.2,90,'UPC');
        
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
