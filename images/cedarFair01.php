<?php                     //      1           2      3      4   
    $correctos = array('QTY','DESCRIPTION','COLOR','SKU','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'TEE LS JR SNPY');
        $COLOR = asignar(2,'COFFEE');
        $SKU = asignar(3,'00798123');
        $PRICE = asignar(4,'10.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('CedarFair_Logo.ttf');
        $arial50 = fuente('Arial_50.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto('C',0,120,1,0,$logo,$black,72,0,0);

        texto($DESCRIPTION,0,150,1,0,$arial,$black,9,0,0);
        
        texto($COLOR,0,170,1,0,$arial,$black,9,0,0);
        
        texto($SKU,0,227,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,285,1,0,$arial,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($SKU,20,130,1.4,80,'128');
        
        require_once('../includes/footer.php');
    }
?>