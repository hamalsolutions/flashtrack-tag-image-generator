<?php                     //   1       2       3      4     5       6       7         8    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','SUBCLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'EGGPLANT');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'195401454N7K');
        $UPC = asignar(4,'761625071249');
        $PRICE = asignar(5,'20.00');
        $DEPT = asignar(6,'159');
        $CLASS = asignar(7,'10');
        $SUBCLASS = asignar(8,'16');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('tapoutLogo.ttf');
        
        // Introducimos los datos
        
        texto('T',0,95,1,0,$logo,$black,95,0,0);
        texto('®',116,100,0,0,$arialBold,$black,7,0,0);
        
        texto('KOHL\'S',0,18,1,0,$arialBold,$black,8.5,0,0);
        
        texto($STYLE,5,120,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,120,2,5,$arialNarrow,$black,8,0,0);
        
        texto($DEPT,0,133,3,50,$arial,$black,9,0,0);
        
        texto($CLASS,0,133,1,0,$arial,$black,9,0,0);
        
        texto($SUBCLASS,0,133,3,-50,$arial,$black,9,0,0);        
        
        cajaRellena(1,235,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,257,1,0,$arialBold,$black,19,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,369,1,0,$arial,$black,10,0,0);
        
        texto('MSRP',5,390,0,0,$arialBold,$black,15,0,0);
        texto($PRICE,0,390,2,5,$arialBold,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,11,125,1.1,87,'UPC');
        
        barcodeTexto(3,0,0,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
