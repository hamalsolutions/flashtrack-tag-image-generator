<?php                     //    1      2      3
    $correctos = array('STYLE','SIZE','EPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(0,'Irma');
        $SIZE = asignar(1,'3XL');
        $EPC = asignar(2,'');

        // Creacion del formato
        formato(150,250,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $Logo = fuente('LulaRoe_Logo.ttf');
        $helvetica = fuente('Helvetica Neue-Medium.ttf');
        
        // Introducimos los datos

        agujero(75,25);

        texto('L',10,70,0,0,$Logo,$black,56,90,0);

        texto($STYLE.' - '.$SIZE,70,115,0,0,$helvetica,$black,15,90,0);

            // Creacion del Barcode

        require_once('../includes/footer.php');
    }
?>
