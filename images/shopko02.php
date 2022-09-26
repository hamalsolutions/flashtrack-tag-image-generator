<?php                      //   1      2       3      4      5      6
    $correctos = array('QTY','COLOR','SIZE','SKU','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'White');
        $SIZE = asignar(2,'M');
        $SKU = asignar(3,'178-58127');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'19.99');
        $DEPT = asignar(6,'194');
                
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        texto('DEPT:',10,50,0,0,$arial,$black,8,0,0);
        texto($DEPT,45,50,0,0,$arial,$black,8,0,0);
        
        texto('SIZE:',10,75,0,0,$arial,$black,8,0,0);
        texto($SIZE,40,75,0,0,$arial,$black,8,0,0);
        
        texto('COLOR:',10,110,0,0,$arial,$black,8,0,0);
        parrafo($COLOR,55,110,0,0,$arial,$black,8,0,12,10);
        
        texto('SKU '.$SKU,0,145,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,280,1,0,$arial,$black,16,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,30,153,1,45,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
