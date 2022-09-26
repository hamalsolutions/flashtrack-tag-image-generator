<?php                      //   1          2         3
    $correctos = array('QTY','STYLE','DESCRIPTION','PCS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'SQT4675');
        $DESCRIPT = asignar(2,'DRESS W/ BEANIE');
        $PCS = asignar(3,'2PC SET');

            // Creacion del formato
        formato(170,300,255,255,255);
        agujero(85,25);
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arial70 = fuente('Arial_70.ttf');
        $arialBold = fuente('arialbd.ttf');
        
            // Introducimos los datos
        texto('STYLE',0,100,1,0,$arial,$black,9,0,0);
        texto($STYLE,0,120,1,0,$arial,$black,9,0,0);
        texto($PCS,0,200,1,0,$arial,$black,9,0,0);

        if (strlen($DESCRIPT)>22) {
            texto($DESCRIPT,0,220,1,0,$arial70,$black,9,0,0);
        } else {
            texto($DESCRIPT,0,220,1,0,$arial,$black,9,0,0);
        }

        perforacion(168,200,250);

        require_once('../includes/footer.php');
    }
?>
