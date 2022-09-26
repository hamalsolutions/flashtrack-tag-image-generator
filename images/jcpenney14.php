<?php                    //    1    
    $correctos = array('QTY','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PRICE = asignar(1,'12.00');
        
            // Creacion del formato
        formato(43,13,255,0,0);
        
            // Colores a usar
        $black = color(255,255,255);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
       
        // Introducimos los datos
        $PRICE = str_replace('.00','',$PRICE);
        $PRICE = str_replace('$','',$PRICE);
        $start = texto($PRICE,0,10,1,0,$arialBold,$black,7,0,0);
        texto('$',$start-5,8,0,0,$arialBold,$black,5.5,0,0);
        require_once('../includes/footer.php');
    }
?>
