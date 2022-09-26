<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','UPC');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'811723020790');
        
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(79, 20);
        
        texto('E',100,47,0,0,$logo,$black,27,0,0);
        
        texto($UPC,0,200,1,0,$arialBold,$black,12,0,0);
        
        require_once('../includes/footer.php');
    }
?>
