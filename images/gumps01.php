<?php                    //    1     2          3   
    $correctos = array('QTY','SKU','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SKU = asignar(1,'201652');
        $SIZE = asignar(2,'SM');
        $DESCRIPTION = asignar(3,'ANTIQUE FLORAL HI/LO SWEATER');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        // Introducimos los datos
        
        texto($SKU.' '.$SIZE,0,75,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,95,1,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($SKU.' '.$SIZE,35,10,1.2,50,'128');
        
        require_once('../includes/footer.php');
    }
?>