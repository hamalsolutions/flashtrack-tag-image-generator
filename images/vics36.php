<?php                     //   1       2       3      4      5
    $correctos = array('QTY','COLOR','SIZE','STYLE','EAN13','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HEATHER GREY');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'3LDST137');
        $EAN13 = asignar(4,'8717851687756');
        $PRICE = asignar(5,'119.00');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto($STYLE,7,49,0,0,strlen($STYLE)>9?$arialNarrow:$arial,$black,strlen($STYLE)>9?6.5:7.5,0,0);
        
        texto($COLOR,0,49,2,2, strlen($COLOR)>9?$arialNarrow:$arial,$black,strlen($COLOR)>9?7:7.5,0,0);
        
        cajaRellena(1,157,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,177,2,20,$arialBold,$black,15,0,0);
        
        perforacion(150, 325, 285);
        
        texto('MANUFACTURES',5,299,0,0,$arial,$black,6,0,0);
        texto('SUGGESTED',5,306,0,0,$arial,$black,6,0,0);
        texto('RETAIL',5,314,0,0,$arial,$black,6,0,0);
        texto($PRICE,0,313,2,7,$arialBold,$black,14,0,1);
        
         // Creacion del Barcode
        barcode($EAN13,7,50,1.2,92,'EAN');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
