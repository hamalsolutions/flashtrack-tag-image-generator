<?php                       //   1       2      3     4
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TS4M1RIWA');
        $COLOR = asignar(2,'CHARCOAL HEATHER');
        $SIZE = asignar(3,'M');
        $UPC = asignar(4,'76211203349');
        
        // Creacion del formato
        formato(193,71,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $logo = fuente('EPC_Logo.ttf');

        // Introducimos los datos
        texto('E',0,19,2,8,$logo,$black,13.5,0,0);

        texto('STYLE:',10,15,0,0,$arialNarrowBold,$black,7,0,0);
        texto($STYLE,45,15,0,0,$arialNarrowBold,$black,7,0,0);

        texto('COLOR:',10,25,0,0,$arialNarrow,$black,7,0,0);
        texto($COLOR,45,25,0,0,$arialNarrow,$black,7,0,0);

        texto('SIZE:',10,35,0,0,$arialNarrowBold,$black,7,0,0);
        texto($SIZE,45,35,0,0,$arialNarrowBold,$black,7,0,0);

        // Creacion del Barcode
        barcode($UPC,55,30,1.1,31,'UPC');
        
        barcodeTexto(1,-2,-5,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
