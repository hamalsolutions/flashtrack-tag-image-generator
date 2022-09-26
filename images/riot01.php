<?php                      //   1 
    $correctos = array('QTY','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SKU = asignar(1,'1093-10-10');
        
        // Creacion del formato
        formato(150,200,255,255,255);
        
        // Colores a usar
        $red = color(241,5,0);
        $black= color(0,0,0);
        
        // Fuentes a usar
        $logo = fuente('riot_logos.ttf');
        $logoG = fuente('riot_logos.ttf');
        $arial = fuente('arial.ttf');
        // Introducimos los datos
        
        texto('B',0,190,1,0,$logoG,$black,150,0,0);
        texto('A',0,170,1,0,$logo,$red,150,0,0);
        
        // Creacion del Barcode
        texto($SKU,0,90,1,0,$arial,$black,9,0,0);
        barcode($SKU,0,18,1,60,'39');
        
        require_once('../includes/footer.php');
    }
?>