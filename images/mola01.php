<?php              //    1      2       3         4          5   
    $correctos = array('QTY','STYLE','COLOR','DESCRIPTION','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'KITK-1090-B');
        $COLOR = asignar(2,'D White');
        $DESCRIPTION = asignar(3,'Cali Girl Bolt Pullover');
        $SIZE = asignar(4,'2T');
        
        // Creacion del formato
        formato(100,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');
                
        texto($STYLE,0,20,1,0,$arialNarrow,$black,9,0,0);
        
        parrafo($DESCRIPTION, 0, 35, 1, 0, $arialNarrow, $black, 8, 0, 15, 15);
        
        texto($COLOR,0,65,1,0,$arialNarrow,$black,8,0,0);
        texto($SIZE,0,90,1,0,$arialNarrow,$black,8,0,0);
        
        require_once('../includes/footer.php');
    }
?>
