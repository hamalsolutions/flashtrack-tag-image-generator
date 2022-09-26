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
        $PRICE = asignar(5,'36.00');
        $DESCRIPTION = asignar(6,'RAPPORT 2FER BY');
        $COLORCODE = asignar(7,'KBJ0');
        
        
        // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_LogoPlain.ttf'); 
        
        // Introducimos los datos
        agujero(75, 18);
        
        texto('D',0,90,1,0,$logo,$black,45,0,0);
        texto('®',105,37,0,0,$arialBold,$black,8,0,0);
        
        texto('STYLE',10,115,0,0,$arial,$black,8,0,0);
        texto($STYLE,0,115,2,10,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,130,1,0,$arial,$black,7,0,0);
        
        texto($COLORCODE,0,147,2,10,$arial,$black,7.5,0,0);
        
        texto('COLOR',10,160,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,160,2,10,$arial,$black,8,0,0);
        
        texto('SIZE',10,180,0,0,$arial,$black,8,0,0);
        texto($SIZE,0,180,2,10,$arial,$black,8,0,0);
        
        cajaRellena(1,300,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,320,1,0,$arialBold,$black,12,0,0);
        
        perforacion(150, 400, 362);        
        
        texto('CAD $'.sinSigno($PRICE),0,385,1,0,$arialBold,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,12,175,1.1,90,'UPC');
        
        barcodeTexto(0.5,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
