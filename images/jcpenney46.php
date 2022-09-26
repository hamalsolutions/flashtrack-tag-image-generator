<?php                      //   1      2       3      4      5          6         7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','PCS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUSH');
        $SIZE = asignar(2,'10');
        $STYLE = asignar(3,'SQT4675');
        $UPC = asignar(4,'887840464861');
        $PRICE = asignar(5,'58.00');
        $DESCRIPT = asignar(6,'DRESS W/ BEANIE');
        $PCS = asignar(7,'2PC SET');

            // Creacion del formato
        formato(170,300,255,255,255);
        agujero(85,25);
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arial70 = fuente('Arial_70.ttf');
        $arialBold = fuente('arialbd.ttf');
        
            // Introducimos los datos
        texto('COLOR',0,50,2,12,$arial,$black,9,0,0);
        texto('STYLE',11,50,0,0,$arial,$black,9,0,0);

        if (strlen($COLOR)<13)
        {
            texto($COLOR,0,70,2,10,$arial,$black,9,0,0);
            texto($STYLE,11,70,0,0,$arial,$black,9,0,0);
        }
        else
        {
            texto($COLOR,0,70,2,10,$arial70,$black,9,0,0);
            texto($STYLE,11,70,0,0,$arial70,$black,9,0,0);
        }
        
        texto('SIZE',0,186,1,0,$arial,$black,10,0,0);
        texto($SIZE,0,210,1,0,$arialBold,$black,14,0,0);
        texto($PCS,0,228,1,0,$arial,$black,9,0,0);

        if (strlen($DESCRIPT)>22) {
            texto($DESCRIPT,0,244,1,0,$arial70,$black,9,0,0);
        } else {
            texto($DESCRIPT,0,244,1,0,$arial,$black,9,0,0);
        }

        perforacion(168,300,250);
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);

        // Creacion del Barcode
        barcode($UPC,13,70,1.2,86,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
