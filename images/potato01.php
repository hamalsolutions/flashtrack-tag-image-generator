<?php                    //    1      2      3
    $correctos = array('QTY','SKU','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SKU = asignar(1,'R324');
        $COLOR = asignar(2,'TURQ');
        $SIZE = asignar(3,'SMALL');
        
            // Creacion del formato
        formato(150,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        
        texto('SKU: '.$SKU,0,25,1,0,$arial,$black,9,0,0);
        
        texto('COLOR: '.$COLOR,0,55,1,0,$arial,$black,9,0,0);
        
        texto('SIZE: '.$SIZE,0,85,1,0,$arial,$black,9,0,0);
        
        require_once('../includes/footer.php');
    }
?>
