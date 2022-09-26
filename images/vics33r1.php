<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','DESC','COLORCODE','COLOR','SIZE','UPC','PRICE');
        
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'GB5BW100');
        $DESC = asignar(2,'POP ZIP HOODED-ARCTIC WINDCHEATER');
        $COLORCODE = asignar(3,'87S');
        $COLOR = asignar(4,'GREY MRL GRINDLE');
        $SIZE = asignar(5,'S');
        $UPC = asignar(6,'885930149209');
        $PRICE = asignar(7,'24.00');
        
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,5,44,0,0,$arialNarrow,$black,8.5,0,0);
        
        if (strlen($COLOR)>13) {
            parrafo($COLOR, 0, 34, 2, 2, $arialNarrow, $black, 8.5, 0, 13, 10, FALSE);
        } else {
            texto($COLOR,0,44,2,2,$arialNarrow,$black,8.5,0,0);
        }
        texto($COLORCODE,0,54,2,10,$arialNarrow,$black,8.5,0,0);
                
        cajaRellena(0,150,149,25,$vicsColor,$vicsColor);
        texto($SIZE,0,170,2,10,$arial,$black,15,0,0);
        
        parrafo($DESC, 0, 200, 1, 0, $arial, $black, 7, 0, 21, 12, FALSE);
        
        perforacion(150, 325, 285);
        
        texto('MSPR $'.sinSigno($PRICE),0,310,1,0,$arialBold,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,60,1,70,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
