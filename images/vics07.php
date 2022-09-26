<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HEATHER GREY');
        $SIZE = asignar(2,'ONE SIZE');
        $STYLE = asignar(3,'3LDST137');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'14.99');
                       
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,9,36,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,36,2,5,$arial,$black,7,0,0);
        
        texto($SIZE,0,183,1,0,$arialBold,$black,12,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);
        
        texto('MANUFACTURERS',10,275,0,0,$arialBold,$black,6,0,0);
        texto('SUGGESTED',10,282,0,0,$arialBold,$black,6,0,0);
        texto('RETAIL PRICE',10,289,0,0,$arialBold,$black,6,0,0);
        
        texto($PRICE,0,285,2,20,$arialBold,$black,13,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,20,55,1.1,95,'UPC');
        
        barcodeTexto(2,0,1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
