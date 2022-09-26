<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','VEN STYLE','CLASS','VEN #','DESCRIPTION','DIM');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE = asignar(2,'3');
        $STYLE = asignar(3,'1235');
        $UPC = asignar(4,'424070093494');
        $PRICE = asignar(5,'99.00');
        $VENDORSTYLE = asignar(6,'8420Y039 PINK');
        $CLASS = asignar(7,'2407');
        $VENDOR = asignar(8,'0458');
        $DESCRIPTION = asignar(9,'PRL NECK HALTER MESH');
        $DIM = asignar(10,'XXX');
        
                
             // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('CLASS / STYLE',0,55,3,65,$arial,$black,8,0,0);
        texto($CLASS.'-'.$STYLE,0,67,3,65,$arial,$black,8,0,0);
        
        texto('SIZE:',0,85,3,110,$arial,$black,8,0,0);
        texto($SIZE,0,97,3,110,$arial,$black,8,0,0);
        
        texto('COLOR',0,85,1,0,$arial,$black,8,0,0);
        texto($COLOR,0,97,1,0,$arial,$black,8,0,0);
        
        texto('DIM',0,85,3,-110,$arial,$black,8,0,0);
        texto($DIM,0,97,3,-110,$arial,$black,8,0,0);
        
        texto('VEN #',0,115,3,110,$arial,$black,8,0,0);
        texto($VENDOR,0,127,3,110,$arial,$black,8,0,0);
        
        texto('VEN STYLE',65,115,0,0,$arial,$black,8,0,0);
        texto($VENDORSTYLE,65,127,0,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,150,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,27,165,1,65,'UPC');
        
        barcodeTexto(4,-2,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
