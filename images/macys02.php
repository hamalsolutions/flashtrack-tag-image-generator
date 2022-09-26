<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','FABRIC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'SWAN');
        $SIZE = asignar(2,'XS');
        $STYLE = asignar(3,'QS745090');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'59.00');
        $DESCRIPTION = asignar(6,'MOTO VEST');
        $FABRIC = asignar(7,'100% COTTON');
                       
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,0,50,1,0,$arialBold,$black,9,0,0);
        
        texto($COLOR,0,65,1,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,80,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,100,1,0,$arialBold,$black,12,0,0);
        
        parrafo($FABRIC,10,180,0,0,$arial,$black,6,0,15,10);
        
        texto('-- - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);
        
        texto('MANUFACTURERS',10,275,0,0,$arialBold,$black,6,0,0);
        texto('SUGGESTED',10,282,0,0,$arialBold,$black,6,0,0);
        texto('RETAIL PRICE',10,289,0,0,$arialBold,$black,6,0,0);
        
        texto($PRICE,0,285,2,15,$arialBold,$black,14,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,20,95,1.1,60,'UPC');
        
        barcodeTexto(1,0,1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
