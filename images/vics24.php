<?php                     //   1       2       3      4      5
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HEATHER GREY');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'3LDST137');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'18.99');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $test = explode('/', $SIZE);
        $vicsColor = colorVic($test[0]);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        imagefilledellipse($img,75,30,15,15,$transparent);
        imageellipse($img,75,30,15,15,$gray);
        
        texto($STYLE,7,49,0,0,strlen($STYLE)>9?$arialNarrow:$arial,$black,strlen($STYLE)>9?6.5:7.5,0,0);
        
        texto($COLOR,0,49,2,2, strlen($COLOR)>9?$arialNarrow:$arial,$black,strlen($COLOR)>9?7:7.5,0,0);
        
        cajaRellena(1,157,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,177,2,5,$arialBold,$black,15,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,290,1,0,$arial,$black,10,0,0);
        
        if (!empty($PRICE))
        texto('MSRP $'.sinSigno($PRICE),0,310,1,0,$arial,$black,13.5,0,0);
        
         // Creacion del Barcode
        barcode($UPC,10,50,1.1,88,'UPC');
        
        barcodeTexto(3,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
