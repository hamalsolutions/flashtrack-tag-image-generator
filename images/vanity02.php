<?php                     //         1          2       3      4       5      6    
    $correctos = array('QTY','COMPARE PRICE','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COMPARE = asignar(1,'28.00');
        $COLOR = asignar(2,'OLIVINE');
        $SIZE = asignar(3,'S');
        $STYLE = asignar(4,'42618A0001');
        $UPC = asignar(5,'884918197249');
        $PRICE = asignar(6,'14.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $blue = color(0,0,255);
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
            // Contenido del formato
        texto('RANSOM',0,28,1,0,$arialNarrowBold,$black,16,0,0);
        
        texto('STYLE',20,75,0,0,$arialNarrow,$black,10,0,0);
        texto($STYLE,75,75,0,0,$arialNarrow,$black,10,0,0);
        
        texto('COLOR',20,95,0,0,$arialNarrow,$black,10,0,0);
        texto($COLOR,75,95,0,8,$arialNarrow,$black,10,0,0);
        
        texto('SIZE',20,115,0,0,$arialNarrow,$black,10,0,0);
        texto($SIZE,75,115,0,0,$arialNarrow,$black,10,0,0);
        
        cajaVacia(25,220,80,70,$black);
        cajaVacia(24,219,82,72,$black);
        
        texto('Compare at:',30,235,0,0,$arialBold,$black,7,0,0);
        texto($COMPARE,0,250,2,65,$arialBold,$black,10,0,1);
        
        texto('You Pay:',30,265,0,0,$arialBold,$black,7,0,0);
        texto($PRICE,40,285,0,0,$arialNarrowBold,$black,13,0,1);
        
        
        
            // Creacion del Barcode
        barcode($UPC,15,115,1.2,80,'UPC');
        
        barcodeTexto(1,0,0,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>