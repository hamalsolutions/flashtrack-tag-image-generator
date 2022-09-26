<?php                    //    1        2     3     4       5       6       7      8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','CLASS','DEPT','PRICE','MSRP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'VSZ');
        $SIZE = asignar(2,'1/2');
        $STYLE = asignar(3,'BG2294-767A');
        $UPC = asignar(4,'463610590130');
        $CLASS = asignar(5,'41');
        $DEPT = asignar(6,'30');
        $PRICE = asignar(7,'20.00');
        $MSRP = asignar(8,'159.99');
            
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('BOB\'S',0,46,1,0,$arialBold,$black,15,0,0);
        
        texto($DEPT,14,66,0,0,$arialBold,$black,10,0,0);
        
        texto($CLASS,14,85,0,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,14,104,0,0,$arialBold,$black,10,0,0);
        
        texto('Size: '.$SIZE,10,185,0,0,$arialBold,$black,8,0,0);
        
        texto('Color: '.$COLOR,0,185,2,8,$arialBold,$black,8,0,0);
        
        texto('SUGGESTED PRICE',0,205,1,0,$arialBold,$black,10,0,0);
        
        texto($MSRP,0,225,1,0,$arialBold,$black,9,0,1);
        
        texto('BOB\'S PRICE',0,245,1,0,$arialBold,$black,12,0,0);
        
        cajaVacia(45,255,80,25,$black);
        
        texto($PRICE,0,275,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,97,1.2,60,'UPC');
        
        barcodeTexto(1,0,0,5,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
