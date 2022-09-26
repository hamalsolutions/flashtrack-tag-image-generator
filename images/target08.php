<?php                      //   1      2       3      4      5
    $correctos = array('QTY','SIZE','STYLE','UPC','COLOR','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $SIZE = asignar(1,'S');
        $STYLE = asignar(2,'382010');
        $UPC = asignar(3,'884411849478');
        $COLOR = asignar(4,'WHITE');
        $PRICE = asignar(5,'9.99');
                       
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,25,1,0,$arial,$black,11,0,0);
        
        texto(formatizarTexto('1  2 3 4 5 6   1 4 5 4 5  1',$UPC),0,90,1,0,$arial,$black,7,0,0);
        
        texto($SIZE,0,115,1,0,$arialBold,$black,12,0,0);
        
        texto($COLOR,10,137,0,0,$arialBold,$black,7,0,0);
        
        texto($PRICE,0,137,2,10,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,35,1,40,'UPC');
        
        require_once('../includes/footer.php');
    }
?>