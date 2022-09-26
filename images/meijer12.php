<?php                    //    1      2     3     4      5         6            7
    $correctos = array('QTY','PCS','SIZE','KEY','UPC','PRICE','DESCRIPTION','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PCS = asignar(1,'1PC');
        $SIZE = asignar(2,'XXL');
        $KEY = asignar(3,'550');
        $UPC = asignar(4,'012345678905');
        $PRICE = asignar(5,'29.99');
        $DESCRIPTION = asignar(6,'LION\'S TEAM JERSEY');
        $SEASON = asignar(7,'20');
        
        // Creacion del formato 1.25" x 2 1/8"
        formato(125,213,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $franklin = fuente('framd.ttf');
        $franklinCond = fuente('framdcd.ttf');
        $logo = fuente('meijer_2013_Logo.ttf');
                
        // Introducimos los datos
        
        agujero(62.5, 25);
        
        cajaRellena(92, 57, 23, 18, $black, $black);
        
        parrafo($DESCRIPTION, 0, 53, 1, 0, $franklin, $black, 8, 0, 18, 10);
        
        texto('m',80,30,0,0,$logo,$black,12,0,0);
        
        texto($PCS,10,70,0,0,$franklin,$black,8,0,0);
        
        texto($KEY,0,70,1,0,$franklin,$black,8,0,0);
        
        texto($SEASON,0,71,2,12,$franklin,$white,10,0,0);
        
        texto($SIZE,0,160,1,0,$franklinCond,$black,14,0,0);
        
        texto($PRICE,0,200,1,0,$franklinCond,$black,18,0,1);
        
        // Creacion del Barcode
        barcode($UPC,5,80,1,49,'UPC');
        
        barcodeTexto(2,-1,-3,6,'framd.ttf');
        
        
        require_once('../includes/footer.php');
    }
?>