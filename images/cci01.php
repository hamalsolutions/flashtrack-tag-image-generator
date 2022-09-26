<?php                    //      1       2   
    $correctos = array('QTY','EAN13','STYLE','SIZE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $EAN13 = asignar(1,'0708008080276');
        $STYLE = asignar(2,'S33IM502');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'DESERT STRP');
        
            // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        
        texto('S2-2',155,30,0,0,$arial,$black,7.5,0,0);
        
        texto($EAN13,0,133,1,0,$arial,$black,9,0,0);
        
        texto('STYLE',10,160,0,0,$arial,$black,7.5,0,0);
        lineaHorizontal(10, 162, 50, $black, 2);
        texto($STYLE,10,173,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto('SIZE',70,160,0,0,$arial,$black,7.5,0,0);
        lineaHorizontal(70, 162, 50, $black, 2);
        texto($SIZE,70,173,0,0,$arial,$black,7.5,0,0);
        
        texto('COLOR',130,160,0,0,$arial,$black,7.5,0,0);
        lineaHorizontal(130, 162, 50, $black, 2);
        texto($COLOR,130,173,0,0,$arialNarrow,$black,7.5,0,0);
        
        // Creacion del Barcode
        barcode($EAN13,5,24,1.6,93,'EAN');
        
        require_once('../includes/footer.php');
    }
?>
