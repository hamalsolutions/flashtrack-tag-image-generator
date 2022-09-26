<?php                      //  1     2      3       4       5       6
    $correctos = array('QTY','UPC','DEPT','SIZE','COLOR','STYLE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $UPC = asignar(1,'881759000004');
        $DEPT = asignar(2,'059');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'CHA');
        $STYLE = asignar(5,'B3007JA-437');
        $PRICE = asignar(6,'$58.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('nordstrom_2010.ttf');
                
        // Introducimos los datos
        
        texto('N',0,70,1,0,$logo,$black,20,0,0);
        
        texto($STYLE,0,95,1,0,$arialBold,$black,11,0,0);
        
        texto($COLOR,0,113,2,15,$arialBold,$black,12,0,0);
        
        texto('Size:',20,183,0,0,$arial,$black,10.5,0,0);
        texto($SIZE,65,183,0,0,$arial,$black,11,0,0);
        
        texto('Dept:',20,207,0,0,$arial,$black,10.5,0,0);
        texto($DEPT,65,207,0,0,$arial,$black,11,0,0);
        
        texto($PRICE,0,292,2,15,$arialBold,$black,11,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,100,1.2,55,'UPC');
        
        barcodeTexto(1,0,0,3,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
