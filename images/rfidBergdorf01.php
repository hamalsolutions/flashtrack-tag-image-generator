<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'VT7200N');
        //$STYLE = asignar(1,'VT7200N-HHHXXXX');
        $COLOR = asignar(2,'RED');
        //$COLOR = asignar(2,'RED-HHHHHH-XXXXXX');
        $SIZE = asignar(3,'L');
        $UPC = asignar(4,'090688116797');
        $PRICE = asignar(5,'$39.99');

        // Creacion del formato
        formato(150,325,255,255,255);
        agujero(75,25);

        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNB = fuente('arialnb.ttf');
        $logo = fuente('EPC_Logo.ttf');
        $BrandLogo = fuente('Bergdorf_Logo.ttf');

        // Introducimos los datos
        texto('E',112,32,0,0,$logo,$black,22,0,0);
        texto('B',0,102,1,0,$BrandLogo,$black,16.5,0,0);

        $styleLen = 'STYLE: '.$STYLE;
        /*
        if (mb_strlen($styleLen) <= 18) {
            texto('STYLE: '.$STYLE,0,144,1,0,$arialBold,$black,7,0,0);
            //texto (mb_strlen($styleLen), 0, 134, 1,0, $arialNB, $black, 7, 0, 0);
        } else {
            texto('STYLE: '.$STYLE,0,144,1,0,$arialNB,$black,7,0,0);
            //texto (mb_strlen($styleLen), 0, 134, 1,0, $arialNB, $black, 7, 0, 0);
        }*/

        if (strlen($styleLen) <= 18) {
            texto('STYLE: '.$STYLE,0,144,1,0,$arialBold,$black,7,0,0);
        } else {
            texto('STYLE: '.$STYLE,0,144,1,0,$arialNB,$black,7,0,0);
        }

        texto('SIZE: '.$SIZE,0,161,1,0,$arialBold,$black,9,0,0);

        $colorLen = 'STYLE: '.$COLOR;
        /*
        if (mb_strlen($colorLen) <= 18) {
            texto('COLOR: '.$COLOR,0,178,1,0,$arialBold,$black,7,0,0);
        } else {
            texto('COLOR: '.$COLOR,0,178,1,0,$arialNB,$black,7,0,0);
        }*/

        if (strlen($colorLen) <= 18) {
            texto('COLOR: '.$COLOR,0,178,1,0,$arialBold,$black,7,0,0);
        } else {
            texto('COLOR: '.$COLOR,0,178,1,0,$arialNB,$black,7,0,0);
        }
        texto($PRICE,0,316,1,0,$arialBold,$black,11,0,0);

        // Creacion del Barcode
        barcode($UPC, 12, 174, 1.1, 84, 'UPC');
        barcodeTexto(2, 0, 0, 5, 'arial.ttf');
        require_once('../includes/footer.php');
    }
?>
