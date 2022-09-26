<?php                    //    1      2     3     4      5         6
    $correctos = array('QTY','SIZE','KEY','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'XXL');
        $KEY = asignar(2,'550');
        $UPC = asignar(3,'012345678905');
        $PRICE = asignar(4,'29.99');
        $DESCRIPTION = asignar(5,'LION\'S TEAM JERSEY');
        
        // Creacion del formato
        formato(125,213,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $franklin = fuente('framd.ttf');
        $franklinCond = fuente('framdcd.ttf');
        $logo = fuente('meijer_2013_Logo.ttf');
        
        // Introducimos los datos
        texto('m',80,30,0,0,$logo,$black,12,0,0);
        
        parrafo($DESCRIPTION, 0, 53, 1, 0, $franklin, $black, 8, 0, 18, 10);
        
        texto($KEY,0,72,2,12,$franklin,$black,8,0,0);
        
        texto($SIZE,0,158,1,0,$franklinCond,$black,14,0,0);
        
        texto($PRICE,0,197,1,0,$franklinCond,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,78,1,49,'UPC');
        
        barcodeTexto(2,-1,-3,6,'framd.ttf');
        
        require_once('../includes/footer.php');
    }
?>