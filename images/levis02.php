<?php                      //   1        2       3
    $correctos = array('QTY','PREPACK','STYLE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PREPACK = asignar(1,'PREPACK');
        $STYLE = asignar(2,'382010');
        $UPC = asignar(3,'884411849478');
        
        // Creacion del formato
        formato(300,200,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,40,1,0,$arial,$black,16,0,0);
        
        texto(formatizarTexto('1        2 3 4 5 6    1 4 5 4 5        1',$UPC),0,140,1,0,$arialBold,$black,12,0,0);
        
        texto($PREPACK,0,182,1,0,$arial,$black,16,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,17,29,2,96,'UPC');
        
        require_once('../includes/footer.php');
    }
?>