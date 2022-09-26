<?php                    //     1          2         3     4       5
    $correctos = array('QTY','CLASS','DESCRIPTION','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $CLASS = asignar(1,'D912');
        $DESCRIPTION = asignar(2,'BASIL');
        $UPC = asignar(3,'123456789104');
        $SIZE = asignar(4,'SMALL');
        $PRICE = asignar(5,'19.99');
        
        // Creacion del formato
        formato(150,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $antonioRegular = fuente('Antonio-Regular.ttf');
        $antonioBold = fuente('Antonio-Bold.ttf');
        $priceFont = fuente('ArialNarrowBoldPL.ttf');
        
        agujero(75, 25);
        
        // Introducimos los datos
        texto($DESCRIPTION,0,60,1,0,$antonioRegular,$black,9,0,0);
        
        texto($CLASS,0,90,1,0,$antonioRegular,$black,9,0,0);
        
        texto($SIZE,0,215,1,0,$antonioBold,$black,16,0,0);
        
        texto($PRICE,0,280,1,0,$priceFont,$black,14,0,1);
        
            // Creacion del Barcode
        barcode($UPC,20,102,1,61,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
