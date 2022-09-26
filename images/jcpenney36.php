<?php                      //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'CJ20974F57');
        $COLOR = asignar(2,'BURNT');
        $SIZE = asignar(3,'1');
        $UPC = asignar(4,'887043419118');
        $PRICE = asignar(5,'$44');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $jcpPrice = fuente('JCP_Ticket_Price.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(84, 25);
        
        texto($STYLE,10,60,0,0,$arialBold,$black,8,0,0);
        
        texto($COLOR,10,80,0,0,$arialBold,$black,8,0,0);
        
        texto($SIZE,0,194,1,0,$arialBold,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$jcpPrice,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,14,80,1.2,75,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
