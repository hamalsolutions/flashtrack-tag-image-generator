<?php                               //       1             2           3        4
    $correctos = array('QTY','STYLE','KEY','UPC','SIZE','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SHORT SLEEVE');
        $KEY = asignar(2,'055');
        $UPC = asignar(3,'813698010004');
        $SIZE = asignar(4,'Medium');
        $PRICE = asignar(5,'12.00');
        $DESCRIPTION = asignar(6,'DIST CHUCK NORRIS THE COBRA IS DEAD-M');
        
        // Creacion del formato
        formato(175,750,255,255,255);
        setAsSticker(19);
        
        // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $transparent = transparente2();
        cajaRellena(1,63,172,538,$transparent,$transparent);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($PRICE,0,50,1,0,$arialBold,$black,20,0,1);
        
        $yPoint = 126;
        for ($i=0;$i<=2;$i++) {
            imagefilledellipse($img,87,$yPoint-9,131,63,$white);
            texto($SIZE,0,$yPoint,1,0,$arial,$black,14,0,0);
            $yPoint += 173;
        }
        
        $yPoint = strlen($STYLE)>8?199:212;
        for ($i=0;$i<=2;$i++) {
            imagefilledellipse($img,87,$yPoint,131,63,$white);
            parrafo($STYLE, 0, $yPoint, 1, 0, $arial, $black, 15, 0, 8, 17);
            $yPoint += 173;
        } 
        
        parrafo($DESCRIPTION, 0, 630, 1, 0, $arialBold, $black, 9, 0, 20, 10);
        
        texto($KEY,0,665,1,0,$arialBold,$black,12,0,0);
        
            // Creacion del Barcode
        barcode($UPC,10,520,1.3,210,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
