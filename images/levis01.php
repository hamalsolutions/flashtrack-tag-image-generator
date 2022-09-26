<?php                      //   1      2       3      4      5
    $correctos = array('QTY','PRICE','SIZE','STYLE','UPC','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $PRICE = asignar(1,'14.99');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'382010');
        $UPC = asignar(4,'884411849478');
        $COLOR = asignar(5,'WHITE');
        
        // Creacion del formato
        formato(200,125,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,20,1,0,$arial,$black,13,0,0);
        
        texto(formatizarTexto('1    2 3 4 5 6   1 4 5 4 5    1',$UPC),0,70,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,90,1,0,$arial,$black,14,0,0);
        
        texto($COLOR,20,100,0,0,$arial,$black,9,0,0);
        
        texto('MSRP',20,118,0,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,118,2,20,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,15,18,1.4,37,'UPC');
        
        require_once('../includes/footer.php');
    }
?>