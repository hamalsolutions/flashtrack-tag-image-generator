<?php                      //  1       2       3        4        5      6       7
    $correctos = array('QTY','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'4RN91081KC');
        $DEPT = asignar(2,'059');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'13');
        $UPC = asignar(5,'704386281298');
        $PRICE = asignar(6,'$18.00');
        $COLOR = asignar(7,'TURQUISE');
        
            // Creacion del formato
        formato(188,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',10,20,0,0,$arialBold,$black,11,0,0);
        texto('KOHLS.COM',10,35,0,0,$arial,$black,9,0,0);
        
        texto($DEPT,0,35,3,-60,$arial,$black,9,0,0);
        
        texto($CLASS,0,35,3,-110,$arial,$black,9,0,0);
        
        texto($SUB,0,35,3,-155,$arial,$black,9,0,0);
        
        if ($COLOR <> '') {
            texto('COLOR: '.$COLOR,0,55,2,5,$arialNarrow,$black,7.5,0,0);
        }
        
        texto('STYLE: '.$STYLE,10,55,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto($PRICE,0,18,2,5,$arialBold,$black,8.5,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,41,1.4,83,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>