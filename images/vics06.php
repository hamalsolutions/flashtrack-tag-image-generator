<?php                     //   1       2       3      4      5        6      7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHT/WHITE');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'9137PUXK');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'19.00');
      
                       
            // Creacion del formato
        formato(300,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
      
        agujero(75, 25);
        texto('2-PIECE GARMENT',9,77,0,0,$arial,$black,7,0,0);
        texto($STYLE,9,64,0,0,$arial,$black,7,0,0);
        texto($COLOR,0,64,2,152,$arial,$black,6.5,0,0);
        
        agujero(225, 25);
        texto('2-PIECE GARMENT',170,200,0,0,$arial,$black,7,0,0);
        texto($STYLE,159,64,0,0,$arial,$black,7,0,0);
        texto($COLOR,0,64,2,0,$arial,$black,6.5,0,0);
        
        cajaRellena(1,160,297,25,$vicsColor,$vicsColor);
        imageline($img,150,0,150,325,$black);
        
        texto($SIZE,0,181,2,152,$arialBold,$black,15,0,0);
        texto($SIZE,0,181,2,5,$arialBold,$black,15,0,0);
        
        
        
        perforacion(300, 325, 280);
        // texto('-- - - - - - - - - - - - - - - - --',0,280,0,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,305,3,150,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,77,1.1,66,'UPC');
        
        barcodeTexto(3,0,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
