<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','DESC','COLORCODE','COLOR','SIZE','UPC','PRICE');
        
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'GB5BW100');
        $DESC = asignar(2,'TECH WINDCHEATER');
        $COLORCODE = asignar(3,'87S');
        $COLOR = asignar(4,'BLACK');
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
        texto($DESC,0,30,1,0,$arialNarrow,$black,8,0,0);
        
        texto($STYLE,5,44,0,0,$arialNarrow,$black,8.5,0,0);
        texto($COLOR,0,44,2,2,$arialNarrow,$black,8.5,0,0);
        texto($COLORCODE,0,54,2,10,$arialNarrow,$black,8.5,0,0);
                
        cajaRellena(0,150,149,25,$vicsColor,$vicsColor);
        texto($SIZE,0,170,2,10,$arial,$black,15,0,0);
        
        perforacion(150, 325, 285);
        
        texto('MSPR $'.sinSigno($PRICE),0,310,1,0,$arialBold,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,60,1,70,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
