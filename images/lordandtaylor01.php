<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'VT7200N');
        $COLOR = asignar(2,'RED');
        $SIZE = asignar(3,'L');
        $UPC = asignar(4,'090688116797');
        $PRICE = asignar(5,'$38.00');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',100,30,0,0,$logo,$black,27,0,0);
        
        texto('STYLE',10,75,0,0,$arial,$black,10,0,0);
        texto($STYLE,10,90,0,0,$arial,$black,9,0,0);
        
        texto('COLOR',0,75,2,10,$arial,$black,10,0,0);
        texto($COLOR,0,90,2,10,$arial,$black,9,0,0);
        
        texto($UPC,0,170,1,0,$arial,$black,9,0,0);
        
        texto('SIZE '.$SIZE,0,190,1,0,$arialBold,$black,12,0,0);
        
        texto($PRICE,0,290,1,0,$arial,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,95,1,60,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
