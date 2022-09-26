<?php                     //    1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','DEPT','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ST62006-PKM');
        $COLOR = asignar(2,'BRIGHT PINK');
        $DEPT = asignar(3,'636');
        $UPC = asignar(4,'193467103114');
        $PRICE = asignar(5,'19.95');
        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        // $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
            // Introducimos los datos
        texto('VON MAUR',0,24,1,0,$arialBold,$black,10,0,0);
        texto('DEPT.',12,125,0,0,$arialNarrow,$black,8,0,0);
        texto('COLOR',64,125,0,0,$arialNarrow,$black,8,0,0);
        texto('STYLE',0,125,2,27,$arialNarrow,$black,8,0,0);
        texto($DEPT,0,114,3,156,$arialNarrow,$black,8,0,0);
        texto($COLOR,0,114,3,40,$arialNarrow,$black,8,0,0);
        texto($STYLE,0,114,3,-110,$arialNarrow,$black,8,0,0);
        texto($PRICE,0,144,1,0,$arialBold,$black,10,0,1);

        // Creacion del Barcode
        barcode($UPC,20,26,1.3,65,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
