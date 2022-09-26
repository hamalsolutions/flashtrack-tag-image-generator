<?php                       //  1       2     3      4          5
    $correctos = array('QTY','STYLE','SIZE','UPC','PRICE','DESCRIPTION');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ST62001-BKE');
        $SIZE = asignar(2,'L/XL');
        $UPC = asignar(3,'614141999996');
        $PRICE = asignar(4,'19.95');
        $DESCRIPTION = asignar(5,'ADULT 4 PACK FACE MASKS');
        
            // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialB = fuente('arialbd.ttf');

        // Introducimos los datos
        texto($STYLE,0,50,1,0,$arialB,$black,11,0,0);
        cajaVacia (44, 60, 113, 25, $black);
        texto('SIZE:',48,77,0,0,$arialB,$black,7,0,0);
        texto($SIZE,0,78,2,46,$arialB,$black,10,0,0);
        texto($DESCRIPTION,0,98,1,0,$arialB,$black,7.5,0,0);
        $retail = str_replace ('$', "", $PRICE);
        texto('RETAIL PRICE: $'.$retail,0,190,1,0,$arialB,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,22,80,1.3,80,'UPC');
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
