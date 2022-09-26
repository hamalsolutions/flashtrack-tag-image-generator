<?php                     //       1         2       3      4
    $correctos = array('QTY','STYLE NAME','STYLE','UPC','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLENAME = asignar(1,'MENS JACKET');
        $STYLE = asignar(2,'MO0100');
        $UPC = asignar(3,'813698010004');
        $COLOR = asignar(4,'White 001');
        $SIZE = asignar(5,'28');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLENAME,0,15,1,0,$arialBold,$black,7,0,0);
        
        texto($STYLE,0,30,1,0,$arial,$black,6,0,0);        

        texto($COLOR,0,46,1,0,$arial,$black,7,0,0);        

        texto($SIZE,0,65,1,0,$arialBold,$black,8,0,0);                 
        
        texto('WWW.AETHERAPPAREL.COM',0,140,1,0,$arial,$black,5,0,0);                 
        
        // Creacion del Barcode
        barcode($UPC,18,75,1,40,'UPC');
        
        barcodeTexto(1.5,0,0,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
