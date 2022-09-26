<?php                    //    1  
    $correctos = array('QTY','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SKU = asignar(1,'009705471');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('PREPACK #',0,55,1,0,$arial,$black,15,0,0);
        
        texto($SKU,0,100,1,0,$arialBold,$black,26,0,0);
        
        
        require_once('../includes/footer.php');
    }
?>
