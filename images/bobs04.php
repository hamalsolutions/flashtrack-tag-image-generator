<?php                             //      1       2         3            4        5           6             7            8                  9                   10
    $correctos = array('QTY','VS','SIZE','STYLE','UPC','CLASS','CHECK','PRICE','MSRP','COLORCODE','SIZECODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $VS = asignar(1,'CD2718F57-WI');
        $SIZE = asignar(2,'1/2');
        $STYLE = asignar(3,'0239');
        $UPC = asignar(4,'463610590130');
        $CLASS = asignar(5,'3014');
        $CHECK = asignar(6,'6');
        $PRICE = asignar(7,'20.00');
        $MSRP = asignar(8,'159.99');
        $COLORCODE = asignar(9,'70');
        $SIZECODE = asignar(10,'01');
            
            // Creacion del formato
        formato(125,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('BOB\'S',0,50,1,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,texto('-',texto($CLASS,14,65,0,0,$arialBold,$black,8,0,0)-12,65,0,0,$arialBold,$black,8,0,0)-4,65,0,0,$arialBold,$black,8,0,0);
        
        texto($CHECK,84,65,0,0,$arialBold,$black,8,0,0);
        
        texto($SIZECODE,texto($COLORCODE,14,80,0,0,$arialBold,$black,8,0,0)-7,80,0,0,$arialBold,$black,8,0,0);
        
        texto('VS# '.$VS,14,95,0,0,$arialBold,$black,8,0,0);
        
        texto('Size: '.$SIZE,0,178,1,0,$arialBold,$black,9,0,0);
        
        texto('SUGGESTED PRICE',0,193,1,0,$arialBold,$black,7,0,0);
        
        texto($MSRP,0,208,1,0,$arialBold,$black,9,0,1);
        
        texto('BOB\'S LOW PRICE',0,232,1,0,$arialBold,$black,8,0,0);
        
        texto($PRICE,0,255,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,6,101,1,46,'UPC');
        
        barcodeTexto(1,0,-2,5,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>
