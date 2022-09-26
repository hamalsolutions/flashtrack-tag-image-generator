<?php                       //   1       2       3     4       5           6
    $correctos = array('QTY','STYLE','COLOR','SIZE','DEV','DESCRIPTION','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'VN-066KBLK');
        $COLOR = asignar(2,'Brown');
        $SIZE = asignar(3,'M');
        $DEV = asignar(4,'TSP01');
        $DESCRIPTION = asignar(5,'Off The Wall Tee');
        $SEASON = asignar(6,'Hol 06');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DEV,15,30,0,0,$arialBold,$black,12,0,0);
        
        texto($STYLE,15,60,0,0,$arialBold,$black,12,0,0);
        
        texto($DESCRIPTION,15,90,0,0,$arialBold,$black,12,0,0);
        
        texto($COLOR,15,120,0,0,$arialBold,$black,12,0,0);
        
        texto('Size '.$SIZE,15,150,0,0,$arialBold,$black,12,0,0);
        
        texto($SEASON,15,180,0,0,$arialBold,$black,12,0,0);
        
        require_once('../includes/footer.php');
    }
?>
