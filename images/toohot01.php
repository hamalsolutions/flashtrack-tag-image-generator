<?php                      //    1        2          3         4      5      6
    $correctos = array('QTY','PROD-ID','COLOR','DESCRIPTION','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $PROD_ID = asignar(1,'TOO HOT');
        $COLOR = asignar(2,'BLACK');
        $DESCRIPTION = asignar(3,'FANTASKULL');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'900210010120');
        $PRICE = asignar(6,'$19.99');
                       
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
                
        // Introducimos los datos
        
        texto($PROD_ID,0,50,1,0,$tahomaBold,$black,11,0,0);
        
        texto($DESCRIPTION,0,71,1,0,$tahomaBold,$black,8,0,0);
        
        texto($COLOR,0,105,1,0,$tahomaBold,$black,9,0,0);
        
        texto($SIZE,0,143,1,0,$tahomaBold,$black,18,0,0);
        
        texto($PRICE,0,271,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,19,168,1,58,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
