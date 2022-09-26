<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','UPC');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'194938016971');

            // Creacion del formato
        formato(213,137,255,255,255);
        setAsSticker (12);        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        texto('E',0,70,1,0,$logo,$black,37,0,0);
        
        texto($UPC,0,106,1,0,$arial,$black,12,0,0);
        
        require_once('../includes/footer.php');
    }
?>
