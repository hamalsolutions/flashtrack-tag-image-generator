<?php                     //    1      2   
    $correctos = array('QTY','SIZE','SIZE#');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        
        $SIZE1 = asignar(1,'L/G');
        $SIZE2 = asignar(2,'11-13');
        
        // Creacion del formato
        formato(100,450,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        
        // Introducimos los datos
        
        $SIZE1 = str_replace(' ','',$SIZE1);
        $SIZE2 = str_replace(' ','',$SIZE2);
        
        $y1 = 60;
        $y2 = 75;
        for ($i=0;$i<6;$i++)
        {
            texto($SIZE1,0,$y1,1,0,$MyriadProBold,$black,12,0,0);
            texto('('.$SIZE2.')',0,$y2,1,0,$MyriadProBold,$black,12,0,0);
            $y1 += 65;
            $y2 += 65;
        }
        
        
        require_once('../includes/footer.php');
    }
?>