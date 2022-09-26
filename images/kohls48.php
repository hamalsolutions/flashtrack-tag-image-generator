<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUBCLASS','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'12345');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'67');
        $PRICE = asignar(6,'49.00');
        $DEPT = asignar(7,'444');
        $CLASS = asignar(8,'60');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('KOHLS_LOGO-B.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        agujero(85, 25);
        
        // Introducimos los datos
        texto('k',0,60,1,0,$logo,$black,26,0,0);
        
        texto($DEPT,0,80,3,80,$arialNarrow,$black,11,0,0);
        
        texto($CLASS,0,80,1,0,$arialNarrow,$black,11,0,0);
        
        texto($SUB,0,80,3,-80,$arialNarrow,$black,11,0,0);
        
        texto('STYLE',0,100,1,0,$arialNarrow,$black,7,0,0);
        
        texto($STYLE,0,113,1,0,$arial,$black,10,0,0);
        
        texto('COLOR',20,130,0,0,$arialNarrow,$black,7,0,0);
        
        texto($COLOR,50,130,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',0,149,1,0,$arialNarrow,$black,6,0,0);
        
        texto($SIZE,0,162,1,0,$arialBold,$black,10,0,0);
        
        texto('PO406',0,170,2,12,$arial,$black,7,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,28,173,1,55,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
