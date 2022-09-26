<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'FOREST GREEN');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'1YBERD1303');
        $UPC = asignar(4,'845550607190');
        $SUB = asignar(5,'12');
        $PRICE = asignar(6,'26.00');
        $DEPT = asignar(7,'24');
        $CLASS = asignar(8,'50');
        
        // Creacion del formato
        formato(163,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,18,1,0,$arialBold,$black,15,270,0);
        
        texto($DEPT,0,35,3,50,$arialBold,$black,11,270,0);
        
        texto($CLASS,0,35,1,0,$arialBold,$black,11,270,0);
        
        texto($SUB,0,35,3,-50,$arialBold,$black,11,270,0);
        
        texto('STYLE',52,53,0,0,$arial,$black,7,270,0);
        texto($STYLE,52,63,0,0,$arial,$black,7,270,0);
        
        texto('COLOR',52,83,0,0,$arial,$black,7,270,0);
        texto($COLOR,52,93,0,0,$arial,$black,6.5,270,0);
        
        texto('SIZE',52,113,0,0,$arial,$black,7,270,0);
        texto($SIZE,52,123,0,0,$arial,$black,7,270,0);
        
        texto($PRICE,0,148,3,-50,$arial,$black,10,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,7,156,1,32,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>