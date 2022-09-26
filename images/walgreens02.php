<?php                    //    1      2      3       4      5     6
    $correctos = array('QTY','UPC','COLOR','SIZE','STYLE','WIC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'885347564961');
        $COLOR = asignar(2,'HEATHER');
        $SIZE = asignar(3,'XL');
        $STYLE = asignar(4,'2PBR033');
        $WIC = asignar(5,'438871');
        $PRICE = asignar(6,'9.99');
        
            // Creacion del formato
        formato(125,238,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        $logo = fuente('Walgreens_Logo.ttf');
                          
        // Introducimos los datos
        texto('W',0,35,1,0,$logo,$black,18,0,0);
        
        texto('SIZE',0,55,1,0,$arial,$black,9,0,0);
        texto($SIZE,0,70,1,0,$timesNewRomanBold,$black,11,0,0);
        
        texto($COLOR,10,85,0,0,$arial,$black,8,0,0);
        
        texto('STYLE#  '.$STYLE,10,97,0,0,$arial,$black,8,0,0);
        
        texto('WIC#  '.$WIC,10,110,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,215,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,7,118,1,38,'UPC');
        
        barcodeTexto(1,0,0,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
