<?php                    //    1        2      3          4         5        6           7      8        9
    $correctos = array('QTY','STYLE','COLOR','SIZE','VENDOR CODE','UPC','DESCRIPTION','YEAR','SPECIAL','PCS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'03355');
        $COLOR = asignar(2,'POWDER WHT');
        $SIZE = asignar(3,'S');
        $VENDOR = asignar(4,'UCT');
        $UPC = asignar(5,'888086481537');
        $DESCRIPTION = asignar(6,'SLUB PATCH POLO');
        $YEAR = asignar(7,'F10');
        $SPECIAL = asignar(8,'ME');
        $PCS = asignar(9,'12');
        
            // Creacion del formato
        formato(150,188,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
       
        // Introducimos los datos
        
        texto('STYLE:',10,25,0,0,$arial,$black,7,0,0);
        texto($YEAR.' '.$SPECIAL.' '.$STYLE,50,25,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto('SIZE:',10,40,0,0,$arial,$black,7,0,0);
        texto($SIZE,50,40,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto('COLOR',10,55,0,0,$arial,$black,7,0,0);
        texto($COLOR,50,55,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto('TOTAL PCS IN CARTON: ',10,72,0,0,$arialNarrow,$black,7,0,0);
        texto($PCS,110,72,0,0,$arialNarrowBold,$black,9,0,0);
        
        texto('PRODUCT DESCRIPTION:  ',10,90,0,0,$arialNarrow,$black,7,0,0);
        texto($DESCRIPTION,10,105,0,0,$arialNarrow,$black,7,0,0);
        
        texto('VENDOR CODE: '.$VENDOR,10,185,0,0,$arialNarrow,$black,7,0,0);
        
        // Creacion del Barcode
        
        barcode($UPC,30,115,1,40,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
