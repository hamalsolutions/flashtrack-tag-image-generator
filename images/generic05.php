<?php                      //   1      2        3           4      5
    $correctos = array('QTY','PART#','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PART = asignar(1,'325333218617');
        $UPC = asignar(2,'885347467323');
        $DESCRIPTION = asignar(3,'MB18/ Harlem /Brick-31');
        
        // Creacion del formato
        formato(300,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('ARBOR',0,20,1,0,$arialBold,$black,14,0,0);
        
        texto($DESCRIPTION,0,32,1,0,$arial,$black,10,0,0);
        
        texto($PART,0,46,1,0,$arial,$black,10,0,0);
        
        texto(formatizarTexto('1  2  3  4  5  6    1  4  5  4  5  1',$UPC),0,90,1,0,$arial,$black,9,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,17,25,2,52,'UPC');
        
        require_once('../includes/footer.php');
    }
?>