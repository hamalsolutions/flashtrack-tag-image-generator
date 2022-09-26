<?php                      //   1      2       3      4      5       6     7     8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Turq/Black/White');
        $SIZE = asignar(2,'4');
        $STYLE = asignar(3,'JM60C1313');
        $UPC = asignar(4,'885008024216');
        $PRICE = asignar(5,'35.00');
        $DESCRIPTION = asignar(6,'SUNDRESS 3');
        
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        
        imagefilledellipse($img,85,26,10,10,$transparent);
        imageellipse($img,85,26,10,10,$gray);
        
        imagerectangle($img,4,45,FORMAT_WIDTH-5,46,$black);
        
        texto('SIZE',10,57,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,10,85,0,0,$arialBold,$black,23,0,0);
        
        
        
        texto($DESCRIPTION,10,100,0,0,strlen($DESCRIPTION)>22?$arialNarrow:$arial,$black,strlen($DESCRIPTION)>22?7.5:8,0,0);
        
        texto($COLOR,10,127,0,0,$arial,$black,8,0,0);
        
        //texto('LOT# '.$LOT,0,140,2,5,$arial,$black,8,0,0);
        
        imagerectangle($img,4,144,FORMAT_WIDTH-5,145,$black);
        
        texto('SUPP. 159111',100,155,0,0,$arial,$black,7,0,0);
        
        texto('STYLE# '.$STYLE,0,175,1,0,$arial,$black,9,0,0);
        
        imagettftext($img,10,0,0,259,$black,$arialBold,'-- - - - - - - - - - - - - - - - - - - --');
        
        //texto($PRICE,0,289,1,0,$arial,$black,15,0,1);
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        //if ($PRICE=='12'){
            cajaRellena(55,266,55,22,$red,$black);
            $start = texto($PRICE,0,285,1,0,$arial,$white,14,0,0);
            texto('$',$start-6,280,0,0,$arial,$white,10,0,0);
        //}
        
        // Creacion del Barcode
        barcode($UPC,7,142,1.3,87,'UPC');
        
        barcodeTexto(2,0,3,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
