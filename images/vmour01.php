<?php                      //   1       2     3       4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'IVORY/CLARRET');
        $SIZE = asignar(2,'X-LARGE');
        $STYLE = asignar(3,'CB4124-L124-PN9');
        $UPC = asignar(4,'660032153855');
        $PRICE = asignar(5,'36.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $darkRed = color(171,50,20);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('oneclothing.ttf');
        
        // Introducimos los datos
        
        texto('A',0,87,1,0,$logo,$darkRed,39,0,0);
        
        texto('STYLE',25,110,0,0,$arial,$black,9,0,0);
        texto($STYLE,0,122,3,80,$arialNarrow,$black,7.5,0,0);
        
        texto('COLOR',105,110,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,122,3,-85,$arialNarrow,$black,7.5,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6   1 2 3 4 5 6',$UPC),0,200,1,0,$arial,$black,9,0,0);
        
        texto('SIZE '.$SIZE,0,220,1,0,$arial,$black,14,0,0);
        
        texto($PRICE,0,282,1,0,$arialBold,$black,15,0,-1);
        
        
        // Creacion del Barcode
        barcode($UPC,9,107,1.3,80,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
