<?php                      //   1      2        3           4      5
    $correctos = array('QTY','STYLE','UPC','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'S42VY501');
        $UPC = asignar(2,'885347467323');
        $COLOR = asignar(3,'COBALT');
        $SIZE = asignar(4,'NO SIZE');
        
        // Creacion del formato
        formato(300,100,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto(formatizarTexto('1 2 3 4 5 6 7 8 9 0 1 2', $UPC) ,0,65,1,0,$arial,$black,10,0,0);
        
        texto('STYLE',30,80,0,0,$arial,$black,8,0,0);
        imageline($img,30,82,90,82,$black);
        texto($STYLE,30,93,0,0,$arial,$black,8,0,0);
        
        texto('SIZE',130,80,0,0,$arial,$black,8,0,0);
        imageline($img,130,82,190,82,$black);
        texto($SIZE,130,93,0,0,$arial,$black,8,0,0);
        
        texto('COLOR',220,80,0,0,$arial,$black,8,0,0);
        imageline($img,220,82,280,82,$black);
        texto($COLOR,220,93,0,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,9,5,2.3,45,'UPC');
        
        require_once('../includes/footer.php');
    }
?>