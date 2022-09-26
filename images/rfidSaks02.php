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
        
        texto('E',110,30,0,0,$logo,$black,27,0,0);
        
        texto($STYLE,20,70,0,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,70,2,20,$arial,$black,9,0,0);
        
        texto($SIZE,0,100,1,0,$arial,$black,9,0,0);
        
        texto($UPC,0,190,1,0,$arial,$black,9,0,0);
        
        texto('MSRP $'.  sinSigno($PRICE),0,235,1,0,$arial,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,115,1,60,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
