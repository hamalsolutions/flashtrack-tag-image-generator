<?php                     //   1       2       3      4      5      6    
    $correctos = array('QTY','COLOR','SIZE','STYLE','DESC','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'LT-BLUE');
        $SIZE = asignar(2,'0/S');
        $STYLE = asignar(3,'168-C');
        $DESC = asignar(4,'PREMIUM CHARGER LOGO');
        $UPC = asignar(5,'182206023844');
        $PRICE = asignar(6,'99.00');
        
                       
            // Creacion del formato
        formato(338,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $red = color(255,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('PELAGIC_LOGO.ttf');
        
        // Introducimos los datos
        
        
        
        cajaRellena(0,0,169,299,$black,$black);
        agujero(85, 25);
        texto('P',10,180,0,0,$logo,$white,32,0,0);
        texto('High performance Offshore Gear',10,250,0,0,$arialBold,$white,7.5,0,0);
        texto('PELAGICGEAR.COM',10,280,0,0,$arial,$red,11.5,0,0);
        
        cajaRellena(170,0,167,299,$white,$black);
        agujero(255, 25);
        texto('P',180,65,0,0,$logo,$black,32,0,0);
        
        texto('STYLE',190,85,0,0,$arial,$black,9,0,0);
        texto($STYLE,190,100,0,0,$arialBold,$black,9,0,0);
        
        texto('COLOR',0,85,2,20,$arial,$black,9,0,0);
        texto($COLOR,0,100,2,20,$arialBold,$black,9,0,0);
        
        texto($DESC,185,135,0,0,$arialBold,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,210,245,0,0,$arialBold,$black,15,0,0);
        
        
        perforacion(338, 300, 260);
        
        texto($PRICE,225,290,0,0,$arialBold,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,170,135,1.1,66,'UPC');
        
        barcodeTexto(3,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
