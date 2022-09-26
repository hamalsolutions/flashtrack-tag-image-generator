<?php                      //   1      2       3      4      5
    $correctos = array('QTY','SIZE','STYLE','UPC','COLOR','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $STYLE = asignar(2,'IC13T107');
        $UPC = asignar(3,'884411849478');
        $COLOR = asignar(4,'001 BLACK');
        $PRICE = asignar(5,'32.00');
        $DESCRIPTION = asignar(6,'S/S"CONE LOGO" TEE');
                       
            // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('STYLE#:',10,20,0,0,$arial,$black,8,0,0);
        texto($STYLE,10,30,0,0,$arial,$black,7,0,0);
        
        texto('COLOR:',0,20,2,5,$arial,$black,8,0,0);
        texto($COLOR,0,30,2,5,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,0,50,1,0,$arial,$black,7,0,0);
        
        texto('Mfr.',15,127,0,0,$arial,$black,6,0,0);
        texto('Sugg.',15,135,0,0,$arial,$black,6,0,0);
        texto('Retail',15,143,0,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,140,1,0,$arialBold,$black,12,0,1);
        
        texto($SIZE,0,135,3,-100,$arialBold,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,18,55,1,50,'UPC');
        barcodeTexto(1, 0, -5, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>