<?php                      //   1      2       3      4         5           6            7 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','AUD PRICE','USA PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Black');
        $SIZE = asignar(2,'32');
        $STYLE = asignar(3,'360080-02');
        $UPC = asignar(4,'2038000502826');
        $DESCRIPTION = asignar(5,'Classic Polo');
        $AUDPRICE = asignar(6,'29.95');
        $USAPRICE = asignar(7,'39.95');
        
            // Creacion del formato
        formato(156,311,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $eurostile = fuente('eurosti.ttf');
        $eurostileBold = fuente('eurostib.ttf');
        
        // Introducimos los datos
        texto('COTTON ON',0,60,1,0,$eurostile,$black,20,0,0);
        
        texto($STYLE,0,79,1,0,$eurostile,$black,9,0,0);
        texto($DESCRIPTION,0,90,1,0,$eurostile,$black,9,0,0);
        
        texto($COLOR,0,110,1,0,$eurostile,$black,9,0,0);
        
        texto($SIZE,0,135,1,0,$eurostileBold,$black,18,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - --',0,212,1,0,$arialBold,$black,10,0,0);
        
        texto('AUD     $'.$AUDPRICE,0,234,1,0,$eurostile,$black,12,0,0);
        texto('USD     $'.$USAPRICE,0,249,1,0,$eurostile,$black,12,0,0);
        
         // Creacion del Barcode
        barcode($UPC,15,130,1.1,60,'EAN');
        
        barcodeTexto(1.5,-1,-2,5,'eurosti.ttf');
        
        require_once('../includes/footer.php');
    }
?>
