<?php                    //     1       2      3     4          5          6
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'JT1267K004');
        $COLOR = asignar(2,'ST15171');
        $UPC = asignar(3,'190172323899');
        $SIZE = asignar(4,'XS');
        $DESCRIPTION = asignar(5, 'FEMME KNIT');
        $PRICE = asignar(6,'34.00');

        // Creacion del formato
        formato(169,300,255,255,255);

            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos
                
        agujero(84, 25);

        texto($STYLE,10,70,0,0,$arialBold,$black,8,0,0);
        texto($COLOR,0,70,2,10,$arialBold,$black,8,0,0);

        texto($SIZE,0,185,2,25,$arialNarrowBold,$black,10,0,0);
        texto($DESCRIPTION,0,210,2,25,$arialNarrowBold,$black,10,0,0);

        perforacion();

        texto($PRICE,0,280,1,0,$arialBold,$black,10,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,70,1.2,75,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
