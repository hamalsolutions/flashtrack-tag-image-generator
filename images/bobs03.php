<?php                      //   1       2       3       4      5     6       7
    $correctos = array('QTY','DEPT','SEASON','STYLE','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {  
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'21');
        $SEASON = asignar(2,'305');
        $STYLE = asignar(3,'1TAT5213');
        $COLOR = asignar(4,'KELLY GREEN');
        $UPC = asignar(5,'900000975837');
        $SIZE = asignar(6,'SMALL');
        $PRICE = asignar(7,'9.99');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto('BOB\'S',0,57,1,0,$arialBold,$black,16,0,0);
        
        texto('Dept: '.$DEPT,10,77,0,0,$arial,$black,8,0,0);
        
        texto($SEASON,0,77,2,10,$arial,$black,8,0,0);
        
        texto('VS#  '.$STYLE,10,100,0,0,$arial,$black,8,0,0);
        
        texto('Color: '.$COLOR,10,123,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto($UPC,0,215,1,0,$arial,$black,8.5,0,0);
        
        texto('Size: '.$SIZE,0,252,1,0,$arial,$black,10,0,0);
        
        texto('BOB\'S PRICE',0,295,1,0,$arial,$black,11.5,0,0);
        
        texto($PRICE,0,317,1,0,$arialBold,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,6,116,1.2,86,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
