<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WS8031');
        $COLOR = asignar(2,'Blue');
        $SIZE = asignar(3,'30');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$54.00');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,61,1,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,80,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,220,1,0,$arialBold,$black,14,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,258,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,290,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,95,1,85,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
