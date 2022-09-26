<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'CK5820F56');
        $COLOR = asignar(2,'BRN');
        $SIZE = asignar(3,'10');
        $UPC = asignar(4,'123456789012');
        $PRICE = asignar(5,'$34.00');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',100,37,0,0,$logo,$black,27,0,0);
        
        texto($STYLE,12,95,0,0,$arial,$black,11,0,0);
        
        texto($COLOR,12,125,0,0,$arial,$black,11,0,0);
        
        texto($SIZE,12,155,0,0,$arial,$black,11,0,0);
        
        texto($PRICE,0,315,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,180,1,60,'UPC');
        
        barcodeTexto(3,-1,-3,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
