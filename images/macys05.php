<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TS278JSP');
        $COLOR = asignar(2,'BLACK/BER');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$12.00');
        $GROUPNAME = asignar(6,'Journey to Brasil');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');

        // Introducimos los datos
        
        agujero(75, 25);
        
        texto($STYLE,10,45,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,45,2,10,$arialNarrow,$black,8,0,0);
        
        cajaRellena(1,150,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,172,2,15,$arialBold,$black,17,0,0);
        
        texto($GROUPNAME,0,230,1,0,$arialBold,$black,9,0,0);
        
        perforacion(150, 325, 290);
        texto($PRICE,0,315,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,55,1,70,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
