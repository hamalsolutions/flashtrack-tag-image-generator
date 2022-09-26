<?php                    //    1      2       3       4        5
    $correctos = array('QTY','DC#','STREET','CITY','STATE','ZIP CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DC = asignar(1,'PDC-0014');
        $STREET = asignar(2,'3400 NORTH GAP DR.');
        $CITY = asignar(3,'FRESNO');
        $STATE = asignar(4,'CA');
        $ZIP = asignar(5,'93727');
        
            // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        
        texto($DC,0,58,1,0,$arialBold,$black,15,0,0);
        
        texto($STREET,0,122,1,0,$arialNarrowBold,$black,15,0,0);
        
        texto($CITY,5,177,0,0,$arialNarrowBold,$black,15,0,0);
        
        texto($STATE.' '.$ZIP,0,177,2,10,$arialNarrowBold,$black,15,0,0);
        
        
        require_once('../includes/footer.php');
    }
?>
