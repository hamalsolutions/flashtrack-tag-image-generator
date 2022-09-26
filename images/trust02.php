<?php                    //     1       2          3          4       5
    $correctos = array('QTY','COLOR','SIZE','DESCRIPTION','STYLE#','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Black');
        $SIZE = asignar(2,'S');
        $DESCRIPTION = asignar(3,'Dangling Heart Necklace');
        $STYLE = asignar(4,'WE013-010');
        $UPC = asignar(5,'884411849478');
                       
            // Creacion del formato
        formato(150,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,15,15,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,15,2,17,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,10,28,0,0,$arialNarrow,$black,7,0,0);
        
        texto($SIZE,0,28,2,7,$arialBold,$black,8,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6    1 4 5 4 5 1',$UPC),0,90,1,0,$arialBold,$black,7,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,18,35,1,45,'UPC');
        
        require_once('../includes/footer.php');
    }
?>