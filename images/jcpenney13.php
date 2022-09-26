<?php                    //    1    
    $correctos = array('QTY','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PRICE = asignar(1,'12.00');
        
            // Creacion del formato
        formato(75,22,255,0,0);
        setAsSticker(5);
        
            // Colores a usar
        $black = color(255,255,255);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        $PRICE = str_replace('.00','',$PRICE);
        $PRICE = str_replace('$','',$PRICE);
        $start = texto($PRICE,0,18,1,0,$arial,$black,14,0,0);
        texto('$',$start-6,14,0,0,$arial,$black,10,0,0);
        require_once('../includes/footer.php');
    }
?>
