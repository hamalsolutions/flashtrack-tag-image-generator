<?php                     //   1       2       3
    $correctos = array('QTY','COLOR','SIZE','STYLE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'DUSTY ROSE');
        $SIZE = asignar(2,'XXS');
        $STYLE = asignar(3,'KJ5G506AT1');

            // Creacion del formato
        formato(150,325,255,255,255);
        agujero (75, 25);
            // Colores a usar
        $black = color(0,0,0);

            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNB = fuente('arialnb.ttf');

        // Introducimos los datos
        texto($STYLE,9,50,0,0,$arialNB,$black,8,0,0);

        texto($COLOR,0,50,2,5,$arialNB,$black,8,0,0);

        texto($SIZE,0,195,1,0,$arialBold,$black,17,0,0);

        texto('2 PC',0,220,1,0,$arial,$black,8,0,0);

        require_once('../includes/footer.php');
    }
?>
