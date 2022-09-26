<?php                      //   1      2        3           4      5
    $correctos = array('QTY','STYLE','UPC','DESCRIPTION','SIZE','COLOR');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'3LYST001');
        $UPC = asignar(2,'885347467323');
        $DESCRIPTION = asignar(3,'NEW LEATHER TEE');
        $SIZE = asignar(4,'L');
        $COLOR = asignar(5,'BLACK');
        
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
        
        texto($DESCRIPTION,0,90,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,20,115,0,0,$arialBold,$black,12,0,0);
        
        texto($COLOR,0,115,2,20,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,15,18,1.4,37,'UPC');
        
        require_once('../includes/footer.php');
    }
?>