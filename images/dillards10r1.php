<?php                      //   1        2       3     4       5       6       7
    $correctos = array('QTY', 'STYLE','COLOR','SIZE','UPC', 'PRICE','PCS','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SNB566');
        $COLOR = asignar(2,'PEACH');
        $SIZE = asignar(3,'7');
        $UPC = asignar(4,'88780459119');
        $PRICE = asignar(5,'49.00');
        $PCS = asignar(6,'2PC');
        $DESCRIPTION = asignar(7,'DRESS WITH BAG');

            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNB = fuente('arialnb.ttf');
        $arialBD = fuente('arialbd.ttf');

        // Introducimos los datos

        agujero(85,25);

        texto('STYLE',15,60,0,0,$arialNB,$black,8,0,0);
        texto($STYLE,65,60,0,0,$arialNB,$black,8,0,0);
        
        texto('COLOR',15,80,0,0,$arialNB,$black,8,0,0);
        texto($COLOR,65,80,0,0,$arialNB,$black,8,0,0);
        
        texto('SIZE',15,100,0,0,$arialNB,$black,8,0,0);
        texto($SIZE,65,100,0,0,$arialNB,$black,8,0,0);

        texto($PCS,0,215,1,0,$arialNB,$black,8,0,0);
        texto($DESCRIPTION,0,240,1,0,$arialNB,$black,8,0,0);

        perforacion(169,300,256);
        texto($PRICE,0,286,1,0,$arialBD,$black,13,0,1);

        // Creacion del Barcode
        barcode($UPC,15,98,1.2,80,'UPC');
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
