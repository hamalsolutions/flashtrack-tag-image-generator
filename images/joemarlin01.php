<?php                       //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'JMKS-3189');
        $COLOR = asignar(2,'CELESTIAL BLUE');
        $SIZE = asignar(3,'M');
        $UPC = asignar(4,'884616098831');
        $PRICE = asignar(5,'$24.00');
        
            // Creacion del formato
        formato(150,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto('Style:',10,20,0,0,$arial,$black,8,0,0);
        
        texto($STYLE,45,20,0,0,$arial,$black,8,0,0);
        
        texto('Color:',10,35,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,45,35,0,0,$arial,$black,8,0,0);
        
        texto('Size  '.$SIZE,0,50,1,0,$arial,$black,10,0,0);
        
        texto('MSRP $'.sinSigno($PRICE),0,145,1,0,$arial,$black,10,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,54,1,64,'UPC');
        
        barcodeTexto(2,-1,-3,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
