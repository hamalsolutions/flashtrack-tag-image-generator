<?php                      //   1      2       3      4     5      6      7       8         9               10
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS','GROUP NAME','COLLECTION NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'WRD-039');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'49');
        $PRICE = asignar(6,'46.00');
        $DEPT = asignar(7,'59');
        $CLASS = asignar(8,'60');
        $GROUP = asignar(9,'A14');
        $COLLECTION = asignar(10,'A14');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,60,1,0,$arialBold,$black,18,0,0);
        
        texto($DEPT,0,80,3,60,$arialBold,$black,12,0,0);
        
        texto($CLASS,0,80,1,0,$arialBold,$black,12,0,0);
        
        texto($SUB,0,80,3,-60,$arialBold,$black,12,0,0);
        
        texto('STYLE',0,93,1,0,$arial,$black,7,0,0);
        
        texto($STYLE,0,105,1,0,$arial,$black,8,0,0);
        
        texto('COLOR',25,120,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,75,120,0,0,$arial,$black,7.5,0,0);
        
        texto('SIZE',0,135,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,148,1,0,$arial,$black,8,0,0);
        
        texto($GROUP,0,242,1,0,$arial,$black,9,0,0);
        
        texto($COLLECTION,0,257,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,28,155,1,65,'UPC');
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
