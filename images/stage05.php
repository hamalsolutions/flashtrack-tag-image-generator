<?php                      //   1      2       3       4       5      6      7       8
    $correctos = array('QTY','DEPT','CLASS','VPN','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'1221');
        $CLASS = asignar(2,'430');
        $VPN = asignar(3,'184225-10');
        $COLOR = asignar(4,'WHITE');
        $SIZE = asignar(5,'S 4');
        $UPC = asignar(6,'885347077119');
        $PRICE = asignar(7,'24.00');
                
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        agujero(85, 25);
        // Introducimos los datos
        
        texto('DEPT '.$DEPT,15,50,0,0,$arial,$black,8,0,0);
        
        texto('CL '.$CLASS,0,50,2,15,$arial,$black,8,0,0);
        
        texto('VPN '.$VPN,15,100,0,0,$arial,$black,8,0,0);
        
        texto('COLOR: '.$COLOR,15,205,0,0,$arial,$black,8,0,0);
        
        texto('SIZE: '.$SIZE,15,220,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,280,1,0,$arialBold,$black,16,0,1);
        
        
          // Creacion del Barcode
        barcode($UPC,25,100,1.1,75,'UPC');
        
        barcodeTexto(2,0,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
