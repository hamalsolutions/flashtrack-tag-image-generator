<?php                    //     1       2      3      4      5    
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'758300033');
        $COLOR = asignar(2,'BLACK');
        $UPC = asignar(3,'795050332958');
        $SIZE = asignar(4,'S');
        $PRICE = asignar(5,'22');
        
        
        // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_TRADEMARK_Logo.ttf');
        $fontPrice = fuente('JCP_RED_Ticket_Price.ttf');
        
        // Introducimos los datos
        agujero(72, 18);
        
        texto('D',0,75,1,0,$logo,$black,45,0,0);
        
        texto($STYLE,10,115,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,10,115,2,10,$arial,$black,8,0,0);
        
        cajaRellena(1,250,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,270,1,0,$arialBold,$black,18,0,0);
        
        perforacion(150, 400, 362);        
        
        texto($PRICE,0,385,1,0,$fontPrice,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,12,135,1.1,90,'UPC');
        
        barcodeTexto(0.5,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
