<?php                      //      1         2      3       4      5      6      7       8        9  
    $correctos = array('QTY','DESCRIPTION','STYLE','DEPT','CLASS','ITEM','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'BUZ NADA TEE SPACE BEHIND-XL');
        $STYLE = asignar(2,'TS1ZPSBUZ');
        $DEPT = asignar(3,'298');
        $CLASS = asignar(4,'03');
        $ITEM = asignar(5,'0632');
        $UPC = asignar(6,'49298030682');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNB = fuente('arialnb.ttf');
        // Introducimos los datos

        texto($DESCRIPTION,0,25,1,0,$arialNB,$black,7,0,0);

        texto($STYLE,0,40,1,0,$arialNB,$black,7,0,0);

        texto('DEPT              CLASS             ITEM',10,75,0,0,$arialNB,$black,7,0,0);

        texto($DEPT,10,63,0,0,$arialBold,$black,7,0,0);
        texto($CLASS,0,63,1,0,$arialBold,$black,7,0,0);
        texto($ITEM,0,63,2,10,$arialBold,$black,7,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,80,1,50,'UPC');
        barcodeTexto(1,0,-2,5,'arial.ttf');

        require_once('../includes/footer.php');
    }
?>