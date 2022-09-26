<?php                    //     1      2         3          4     5       6       7
    $correctos = array('QTY','STYLE','UPC','DESCRIPTION','SIZE','DEPT','MSRP','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'3COLMO143BBChar');
        $UPC = asignar(2,'190344333473');
        $DESCRIPTION = asignar(3,'Durden SS');
        $SIZE = asignar(4,'S');
        $DEPT = asignar(5,'Mens / Hommer');
        $MSRP = asignar(6,'25.00');
        $PRICE = asignar(7,'14.00');

            // Creacion del formato 
        formato(150,187,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');

            // Introducimos los datos
        texto($STYLE,0,25,1,0,$arial,$black,8,0,0);

        texto($DESCRIPTION,0,118,1,0,$arialNarrow,$black,8,0,0);

        texto($SIZE,0,138,1,0,$arial,$black,12,0,0);

        texto($DEPT,0,154,1,0,$arial,$black,8,0,0);

//        if ($MSRP) {
            texto('MSRP:  '.$MSRP,0,168,1,0,$arial,$black,8,0,0);
//        }

        texto($PRICE,0,180,1,0,$arial,$black,8,0,1);

            // Creacion del Barcode
        barcode($UPC,14,36,1.1,60,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
