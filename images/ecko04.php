<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'EK90059');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'28.00');
        $DESCRIPTION = asignar(6,'PHOTO COLLAGE');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar 
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        imagefilledellipse($img,75,30,15,15,$transparent);
        imageellipse($img,75,30,15,15,$gray);
        
        texto('STYLE:',9,68,0,0,$arial,$black,7,0,0);
        texto($STYLE,9,77,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',0,68,2,5,$arial,$black,7,0,0);
        texto($COLOR,0,77,2,5,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,9,87,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,190,1,0,$arialBold,$black,15,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
        
        texto('MSRP $'.sinSigno($PRICE),0,307,1,0,$arialBold,$black,14,0,0);
        
        
         // Creacion del Barcode
        barcode($UPC,10,85,1.1,70,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
