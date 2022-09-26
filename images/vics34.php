<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','STYLELAB','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'A5H');
        $COLOR = asignar(2,'DK DENIM');
        $SIZE = asignar(3,'S');
        $STYLE = asignar(4,'APUVR78I');
        $STYLELAB = asignar(5,'CULTURE MIX');
        $UPC = asignar(6,'885347132467');
        $PRICE = asignar(7,'35.00');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto($STYLE,9,42,0,0,$arial,$black,7,0,0);
        
        texto($COLORCODE.'/'.$COLOR,0,42,2,5,$arial,$black,6,0,0);
        
        texto($STYLELAB,0,60,1,0,$arial,$black,9,0,0);
        
        cajaRellena(1,175,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,195,1,0,$arialBold,$black,15,0,0);
        
        perforacion(150, 325, 290);
        
        texto($PRICE,0,315,1,0,$arialBold,$black,14,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,60,1.1,85,'UPC');
        
        barcodeTexto(3,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
