<?php                     //    1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','DEPT','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'102');
        $COLOR = asignar(2,'PURPLE');
        $DEPT = asignar(3,'375');
        $UPC = asignar(4,'001874600013');
        $PRICE = asignar(5,'22.00');
        
        // Creacion del formato
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        // $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
            // Introducimos los datos
        texto('VON MAUR',0,16,1,0,$arialBold,$black,9,0,0);
        texto('DEPT.',10,80,0,0,$arialNarrow,$black,7,0,0);
        texto('COLOR',52,80,0,0,$arialNarrow,$black,7,0,0);
        texto('STYLE',0,80,2,14,$arialNarrow,$black,7,0,0);
        texto($DEPT,0,70,3,110,$arialNarrow,$black,7,0,0);
        texto($COLOR,0,70,3,20,$arialNarrow,$black,7,0,0);
        texto($STYLE,0,70,3,-96,$arialNarrow,$black,7,0,0);
        texto($PRICE,0,96,1,0,$arialBold,$black,9,0,1);

        // Creacion del Barcode
        barcode($UPC,10,18,1.10,35,'UPC');

        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
