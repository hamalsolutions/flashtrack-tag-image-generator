<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','COLOR CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CLR - COLOR');
        $SIZE = asignar(2,'32');
        $STYLE = asignar(3,'1001P-127');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'275.00');
        $DESCRIPTION = asignar(6,'THE LOOKER');
        $COLORCODE = asignar(7,'122');
                       
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Mother',0,47,1,0,$arial,$black,14,0,0);
        
        texto($STYLE,9,66,0,0,$arial,$black,8,0,0);
        
        texto($COLORCODE,9,82,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,82,2,5,$arial,$black,7,0,0);
        
        cajaRellena(1,155,147,25,$vicsColor,$vicsColor);
        texto($DESCRIPTION,9,172,0,0,$arial,$black,7,0,0);
        texto($SIZE,0,175,2,5,$arialBold,$black,15,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,290,1,0,$arial,$black,10,0,0);
        
        if ($PRICE<>'') {
            texto('MANUFACTURERS',10,300,0,0,$arial,$black,5,0,0);
            texto('SUGGESTED',10,308,0,0,$arial,$black,5,0,0);
            texto('RETAIL PRICE',10,316,0,0,$arial,$black,5,0,0);
        }
        texto($PRICE,0,310,2,5,$arialBold,$black,13,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,10,80,1.1,60,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
