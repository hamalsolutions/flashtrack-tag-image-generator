<?php                      //  1      2       3       4      5       6      7     8
    $correctos = array('QTY','SIZE','COLOR','STYLE','DEPT','CLASS','ITEM','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $COLOR = asignar(2,'Black');
        $STYLE = asignar(3,'4MET93300T');
        $DEPT = asignar(4,'045');
        $CLASS = asignar(5,'04');
        $ITEM = asignar(6,'3045');
        $UPC = asignar(7,'191651304989');
        $PRICE = asignar(8,'$12.99');

            // Creacion del formato
        formato(150,325,255,255,255);

            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $epclogo = fuente('EPC_Logo.ttf');

        // Introducimos los datos

        agujero(75, 25);
        texto('E',0,28,2,13,$epclogo,$black,18,0,0);
        texto('SIZE',0,68,1,0,$arial,$black,8,0,0);
        texto($SIZE,0,88,1,0,$arial,$black,16,0,0);
        texto($COLOR,22,116,0,0,$arial,$black,8,0,0);
        texto('STYLE '.$STYLE,22,132,0,0,$arial,$black,8,0,0);
        texto($DEPT,22,149,0,0,$arial,$black,8,0,0);
        texto($CLASS,73,149,0,0,$arial,$black,8,0,0);
        texto($ITEM,0,149,2,21,$arial,$black,8,0,0);
        texto(' DEPT       CL       ITEM',21,162,0,0,$arial,$black,8,0,0);
        texto($PRICE,0,305,1,0,$arial,$black,12,0,1);

        // Creacion del Barcode
        barcode($UPC,18,178,1,56,'UPC');

        barcodeTexto(2,-1,1,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
