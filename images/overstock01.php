<?php                    //    1        2          3      4       5      
    $correctos = array('QTY','SKU','DESCRIPTION','STYLE','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SKU = asignar(1,'125855198-000-003');
        $DESCRIPTION = asignar(2,'MENS STRIPE SUIT');
        $STYLE = asignar(3,'EWW015');
        $COLOR = asignar(4,'CREAM');
        $SIZE = asignar(5,'XL/38');
        
        // Creacion del formato
        formato(350,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto($SKU,0,30,1,0,$arial,$black,18,0,0);
        
        texto($STYLE,30,110,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,110,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,110,2,30,$arial,$black,10,0,0);
        
        texto($DESCRIPTION,0,130,1,0,$arial,$black,9,0,0);
        
        
        // Creacion del Barcode
        barcode($SKU,40,33,1.1,57,'39');
        
        require_once('../includes/footer.php');
    }
?>
