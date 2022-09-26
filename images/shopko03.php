<?php                      //   1      2       3      4      5      6
    $correctos = array('QTY','COLOR','SIZE','SKU','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'KELLY GREEN HEATHER');
        $SIZE = asignar(2,'MEDIUM');
        $SKU = asignar(3,'07639255');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'17.99');
        $DEPT = asignar(6,'084');
                
        // Creacion del formato
        formato(125,225,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('DEPT',10,50,0,0,$arial,$black,7,0,0);
        
        texto($DEPT,39,50,0,0,$arial,$black,7,0,0);
        
        texto('SIZE:',10,65,0,0,$arial,$black,6,0,0);
        
        texto($SIZE,35,65,0,0,$arial,$black,6,0,0);
        
        texto('COLOR:',10,75,0,0,$arial,$black,6,0,0);
        parrafo($COLOR,47,75,0,0,$arial,$black,6,0,12,10);
        
        texto('SKU '.$SKU,0,100,1,0,$arialBold,$black,8,0,0);
        
        texto($PRICE,0,215,1,0,$arial,$black,16,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,7,103,1,43,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        
        require_once('../includes/footer.php');
    }
?>
