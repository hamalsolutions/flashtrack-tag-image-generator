<?php                      //   1       2     3       4      5         6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE = asignar(2,'OSFA');
        //$STYLE = asignar(3,'KJ8YV8GEN00IR00');
        $STYLE = asignar(3,'KJ8YV8GEN00IR00');
        $UPC = asignar(4,'13244277350');
        $PRICE = asignar(5,'$40.00');
        $DESCRIPTION = asignar(6,'KIDS 16IN 4 PC SET MERMAID BACKPACK WITH LUNCH TOTE, KEY CHAIN, WATER BOTTLE');

            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialN70 = fuente('Arial_70.ttf');
        
        // Introducimos los datos
        texto('STYLE',10,60,0,0,$arial,$black,9,0,0);
        if (strlen($STYLE) > 10) {
            //texto($STYLE,10,75,0,0,$arialNarrow,$black,10,0,0);
            texto($STYLE,10,76,0,0,$arialN70,$black,10.5,0,0);
        } else {
            texto($STYLE,10,75,0,0,$arial,$black,9,0,0);
        }

        texto('COLOR',0,60,2,10,$arial,$black,9,0,0);
        //texto($COLOR,0,75,2,10,$arialNarrow,$black,strlen($COLOR)>10?7.5:9,0,0);
        if (strlen($COLOR) > 9) {
            texto($COLOR,0,75,2,10,$arialN70,$black,10,0,0);
        } else {
            texto($COLOR,0,75,2,10,$arial,$black,9,0,0);
        }

        if (strlen($DESCRIPTION) >36) {
            parrafo($DESCRIPTION, 0, 184, 1, 0, $arialBold, $black, 7.5, 0, 24, 12);
        } else {
            parrafo($DESCRIPTION, 0, 184, 1, 0, $arialNarrow, $black, 8, 0, 24, 12);
        }

        texto('SIZE   '.$SIZE,20,242,0,0,$arialBold,$black,13,0,0);
        texto($PRICE,0,282,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,83,1.1,68,'UPC');
        barcodeTexto(1,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
