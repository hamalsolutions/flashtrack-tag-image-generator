<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE'.'UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TERPULLOVER-P2HGYOS-XS');
        $COLOR = asignar(2,'HEATHER GREY W/ CRÈME');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'619438986048');
        $PRICE = asignar(5,'249.00');
                
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialnb = fuente('arialnb.ttf');
        $arial70 = fuente('Arial_70_Bold.ttf');
        $logo = fuente('DONNI_Logo.ttf');
        agujero (85, 25);
        perforacion (170,300,262);


        // Introducimos los datos
        texto('D',0,68,1,0,$logo,$black,18,0,0);

        if(strlen ($STYLE) > 18) {
            texto($STYLE,0,90,1,0,$arialnb,$black,9,0,0);
        } else {
            texto($STYLE,0,90,1,0,$arial,$black,9,0,0);
        }

        if(strlen ($COLOR) > 18) {
            texto($COLOR,0,112,1,0,$arialnb,$black,9,0,0);
        } else {
            texto($COLOR,0,112,1,0,$arial,$black,9,0,0);
        }


       // parrafo($COLOR, 0, 93, 1, 0, $arial, $black, 10, 0, 15, 12);
        
        texto($SIZE,0,146,1,0,$arialBold,$black,12,0,0);

        if( $PRICE <> '') {
            texto('MSRP $'.$PRICE,0,290,1,0,$arialBold,$black,12,0,0);
        }


        // Creacion del Barcode
        barcode($UPC,15,144,1.2,65,'UPC');
        
        barcodeTexto(2,0,8,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
