<?php                      //   1
    $correctos = array('QTY','STYLE','COLOR','SIZE','PCS-SET');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TGB75080M1');
        $COLOR = asignar(2,'MELON');
        $SIZE = asignar(3,'6');
        $PCS = asignar(4,'2 PC');

            // Creacion del formato
        formato(150,325,255,255,255);

            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialn = fuente('arialn.ttf');
        
        // Introducimos los datos

        agujero(75,25);

        texto($STYLE,10,90,0,0,$arialn,$black,10,0,0);

        texto($COLOR,10,125,0,0,$arialn,$black,10,0,0);

        texto($SIZE,10,160,0,0,$arialn,$black,10,0,0);

        texto($PCS,10,195,0,0,$arialn,$black,10,0,0);


        require_once('../includes/footer.php');
    }
?>