<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'DB487901');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'14');
        $PRICE = asignar(6,'26.95');
        $DEPT = asignar(7,'059');
        $CLASS = asignar(8,'10');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KOHLS_LOGO-B.ttf');
        // Introducimos los datos
        agujero(85, 25);
        
        texto('K',0,60,1,0,$logo,$black,48,0,0);
        texto('Kohls.com',0,73,1,0,$arial,$black,8,0,0);
        
        texto($DEPT,0,93,3,100,$arialBold,$black,10,0,0);
        texto($CLASS,0,93,1,0,$arialBold,$black,10,0,0);
        texto($SUB,0,93,3,-100,$arialBold,$black,10,0,0);
        
        texto('STYLE',10,110,0,0,$arial,$black,7,0,0);
        texto($STYLE,70,110,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',10,125,0,0,$arial,$black,8,0,0);
        texto($COLOR,70,125,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',10,140,0,0,$arial,$black,8,0,0);
        texto($SIZE,70,140,0,0,$arial,$black,8,0,0);
        
        perforacion();
                
        texto($PRICE,0,285,1,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,15,142,1.2,75,'UPC');
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
