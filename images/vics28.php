<?php                     //   1       2       3      4      5   
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PAPRIKA');
        $SIZE = asignar(2,'1');
        $STYLE = asignar(3,'CJ20141P442');
        $UPC = asignar(4,'808295151021');
        $PRICE = asignar(5,'32.00');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Style: '.$STYLE,0,78,1,0,$arial,$black,9,0,0);
        
        texto('Color: '.$COLOR,0,98,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,137,1,0,$arial,$black,17,0,0);
        
        cajaRellena(1,160,147,25,$vicsColor,$vicsColor);
        
        texto('-- - - - - - - - - - - - - - - - --',0,280,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,305,1,0,$arial,$black,15,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,182,1.1,77,'UPC');
        
        barcodeTexto(2,0,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
