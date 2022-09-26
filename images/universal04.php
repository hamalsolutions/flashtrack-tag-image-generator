<?php                     //   1       2       3     4     5 
    $correctos = array('QTY','DESC','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DESC = asignar(1,'DESP ME BIG VECTOR TEE');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'LARGE');
        $UPC = asignar(4,'400012390883');
        $PRICE = asignar(5,'$18.00');
                       
            // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $comicBold = fuente('comicbd.ttf');
        $gothic = fuente('gothic.ttf');
        $logo = fuente('Universal_Logo.ttf');
                                                     
        // Introducimos los datos
        
        texto('U',0,68,1,0,$logo,$black,40,0,0);
        
        texto('®',108,52,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',7,92,0,0,$gothic,$black,6,0,0);
        parrafo($COLOR,42,92,0,0,$arialNarrow,$black,7.5,0,15,8);
        
        texto('SIZE',8,110,0,0,$gothic,$black,7,0,0);
        texto($SIZE,42,110,0,0,$gothic,$black,7,0,0);
        
        texto('DESC',7,122,0,0,$gothic,$black,7,0,0);
        parrafo($DESC,42,122,0,0,$arialNarrow,$black,7.5,0,15,8);
        
        texto($PRICE,0,215,1,0,$comicBold,$black,14,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,5,137,1,41,'UPC');
        
        barcodeTexto(2,0,-4,5,'courbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
