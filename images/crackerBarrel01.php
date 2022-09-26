<?php                     //       1         2     3      4       5     
    $correctos = array('QTY','DESCRIPTION','SKU','SIZE','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'08 CROSS CABBIE HAT');
        $SKU = asignar(2,'533121');
        $SIZE = asignar(3,'OSFA');
        $DEPT = asignar(4,'243');
        $PRICE = asignar(5,'19.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
                
            // Colores a usar 
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $arial50 = fuente('Arial_50.ttf');
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto($DESCRIPTION,0,60,1,0,strlen($DESCRIPTION)>25 ? $arial50 : $arialNarrowBold,$black,10,0,0);
        
        texto($SIZE,0,215,1,0,$arialBold,$black,12,0,0);
        
        texto($DEPT,20,260,0,0,$arial,$black,10,0,0);
        texto($PRICE,0,260,2,10,$arialBold,$black,12,0,0);
        
        texto($SKU,0,182,1,0,$arial,$black,12,0,0);
        
         // Creacion del Barcode
        barcode($SKU,12,95,1,70,'39');
        
        require_once('../includes/footer.php');
    }
?>
