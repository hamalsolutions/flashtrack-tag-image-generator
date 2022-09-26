<?php                      //   1      2       3      4      5       6     7     8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','SUPP','SUB','LOT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'RED');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'JT11005O0204G');
        $UPC = asignar(4,'885008024216');
        $PRICE = asignar(5,'17.00');
        $SUPP = asignar(6,'05169-8');
        $SUB = asignar(7,'662');
        $LOT = asignar(8,'8359');
        
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
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('JerryLeigh_Logo.ttf');
        
        // Introducimos los datos
        
        imagefilledellipse($img,85,26,10,10,$transparent);
        imageellipse($img,85,26,10,10,$gray);
        
        texto('J',0,55,1,0,$logo,$black,20,0,0);
        
        texto($STYLE,10,75,0,0,$arial,$black,9,0,0);
        
        texto('SUB:',10,90,0,0,$arial,$black,8,0,0);
        
        texto($SUB,35,90,0,0,$arial,$black,8,0,0);
        
        texto('LOT:',10,105,0,0,$arial,$black,8,0,0);
        
        texto($LOT,35,105,0,0,$arial,$black,8,0,0);
        
        texto('SUPP.',80,105,0,0,$arial,$black,8,0,0);
        
        texto($SUPP,114,105,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,118,2,20,$arial,$black,9,0,0);
        
        imagerectangle($img,4,120,FORMAT_WIDTH-5,121,$black);
        
        texto('Size',10,132,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,153,1,0,$arialBold,$black,15,0,0);
        
        imagerectangle($img,4,164,FORMAT_WIDTH-5,165,$black);
        
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
        barcode($UPC,27,183,1,40,'UPC');
        
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
