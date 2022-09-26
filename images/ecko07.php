<?php                       //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'EM-T10076');
        $COLOR = asignar(2,'BLK');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'888679934600');
        $DESCRIPTION = asignar(5,'ECKO CORPS TEE');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        setAsSticker(15);
        texto($DESCRIPTION,10,17,0,0,$arial,$black,8,0,0);
        
        texto($STYLE,10,33,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,10,50,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,10,67,0,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,74,1,45,'UPC');
        
        texto(formatizarTexto('1     2 3 4 5 6 1 4 5 4 5      1',$UPC),0,132,1,0,$arial,$black,7,0,0);
        
        require_once('../includes/footer.php');
    }
?>