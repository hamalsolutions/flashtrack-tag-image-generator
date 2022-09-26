<?php                    //    1    
    $correctos = array('QTY','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PRICE = asignar(1,'6.97');
        
            // Creacion del formato
        formato(75,22,255,255,255);
        setAsSticker(5);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        texto($PRICE,0,18,1,0,$arial,$black,14,0,1);
        
        require_once('../includes/footer.php');
    }
?>
