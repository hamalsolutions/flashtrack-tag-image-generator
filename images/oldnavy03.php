<?php                    //    1      2       3       4        5     6
    $correctos = array('QTY','PO#','PREPACK','STYLE','SIZE','PCS','PACKS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $PO = asignar(1,'HE4AANA');
        $PREPACK = asignar(2,'008030944');
        $STYLE = asignar(3,'XXXXX');
        $SIZE = asignar(4,'0000');
        $PCS = asignar(5,'XX');
        $PACKS = asignar(6,'5');
        
            // Creacion del formato
        formato(400,600,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        
        texto('PO#  '.$PO,25,143,0,0,$arialNarrowBold,$black,30,0,0);
        
        texto('PREPACK  '.$PREPACK,25,206,0,0,$arialNarrowBold,$black,30,0,0);
        
        texto('STYLE  '.$STYLE,25,264,0,0,$arialNarrowBold,$black,30,0,0);
        
        texto('SIZE  '.$SIZE,25,325,0,10,$arialNarrowBold,$black,30,0,0);
        
        texto('QTY  '.$PCS,25,387,0,0,$arialNarrowBold,$black,30,0,0);
        
        texto('TOTAL PACKS  '.$PACKS,25,444,0,0,$arialNarrowBold,$black,30,0,0);
                
        require_once('../includes/footer.php');
    }
?>
