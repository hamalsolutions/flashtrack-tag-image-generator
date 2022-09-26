<?php                       //   1           2         3          4
    $correctos = array('QTY','US PRICE','UK PRICE','EU PRICE','BARCODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $US_PRICE = asignar(1,'29.95');
        $UK_PRICE = asignar(2,'25.00');
        $EU_PRICE = asignar(3,'29,95');
        $BARCODE = asignar(4,'SW15148294829000144010');

        // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $futuraSTD = fuente('FuturaStd-Medium.ttf');

        // Introducimos los datos
        setAsSticker(15);

        texto('US $'.sinSigno($US_PRICE).'  UK £'.sinSigno($UK_PRICE).'  EU '.sinSigno($EU_PRICE).'€',0,40,1,0,$futuraSTD,$black,8,0,0);

        // Creacion del Barcode
        barcode(substr($BARCODE,0,8),10,45,1,70,'39');
        
        texto($BARCODE,0,132,1,0,$futuraSTD,$black,7,0,0);
        
        require_once('../includes/footer.php');
    }
?>