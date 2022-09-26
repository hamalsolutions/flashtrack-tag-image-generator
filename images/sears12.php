<?php                     //    1      2
    $correctos = array('QTY','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SIZE = asignar(1,'5/6');
        $DESCRIPTION = asignar(2,'MARVEL HEROES');
        
        // Creacion del formato
        formato(100,450,255,255,255,90);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
       $MyriadProBold = fuente('MyriadPro-Bold.otf');
        
        // Introducimos los datos
        
        $yPos = 60;
        for($i=1;$i<=6;$i++){
            texto($SIZE,0,$yPos,1,0,$MyriadProBold,$black,12,0,0);
            $yPos += 15;
            texto('-----------',0,$yPos-9,1,0,$arial,$black,7,0,0);
            parrafo($DESCRIPTION,0,$yPos,1,0,$MyriadProBold,$black,10,0,10,10);
            //texto($DESCRIPTION,0,$yPos,1,0,$MyriadProBold,$black,10,0,0);
            $yPos += 47;
        }
        
        require_once('../includes/footer.php');
    }
?>