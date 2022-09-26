<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','COLOR CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'SM990411');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'$36.00 USD');
        $DESCRIPTION = asignar(6,'RAPPORT 2FER BY');
        $COLORCODE = asignar(7,'KBJ0');
        
        
        // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(200,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Quicksilver_Logo.ttf'); 
        
        // Introducimos los datos
        agujero(75, 18);
        
        texto('q',5,60,0,0,$logo,$black,25,0,0);
        texto('Q',108,60,0,0,$logo,$red,25,0,0);
        
        if ($DESCRIPTION == 'ULUA ALOHA') {
            texto('ULUA',45,90,0,0,$arial,$black,7.5,0,0);
            texto('ALOHA',75,90,0,0,$arial,$black,7.5,0,0);
        } else {
            texto($DESCRIPTION,0,90,1,0,$arial,$black,7.5,0,0);
        }        
        texto('STYLE',10,220,0,0,$arial,$black,8,0,0);
        texto($STYLE,10,235,0,0,$arial,$black,8,0,0);
        
        texto('COLOR',102,220,0,0,$arial,$black,8,0,0);
        texto($COLORCODE,0,235,2,10,$arial,$black,7.5,0,0);
        texto($COLOR,0,255,2,10,$arial,$black,strlen($COLOR)>14?7:8,0,0);
        
        texto($SIZE,10,255,0,0,$arial,$black,8,0,0);
        
        cajaRellena(1,300,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,320,1,0,$arialBold,$black,12,0,0);
        
        perforacion(150, 400, 362);        
        
        texto($PRICE,0,385,1,0,$arialBold,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,12,90,1.1,90,'UPC');
        
        barcodeTexto(0.5,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
