<?php                       //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'F13DAP990');
        $COLOR = asignar(2,'BLKFD');
        $SIZE = asignar(3,'26');
        $UPC = asignar(4,'884616098831');
        $PRICE = asignar(5,'$245.00');
        $DESCRIPTION = asignar(6,'SUNSET - MD RISE');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        setAsSticker(15);
        texto($DESCRIPTION,10,17,0,0,$arial,$black,8,0,0);
        
        texto('STYLE:',10,33,0,0,$arial,$black,8,0,0);
        texto($STYLE,65,33,0,0,$arial,$black,8,0,0);
        
        texto('COLOR:',10,50,0,0,$arial,$black,8,0,0);
        texto($COLOR,65,50,0,0,$arial,$black,8,0,0);
        
        texto('SIZE:',10,67,0,0,$arial,$black,8,0,0);
        texto($SIZE,65,67,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,145,1,0,$arial,$black,8,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,74,1,44,'UPC');
        
        barcodeTexto(2,-1,-3,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
