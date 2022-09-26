<?php                      //   1       2      3      4     5       6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','SUPP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'YMBR110029JP');
        $UPC = asignar(4,'730772777434');
        $PRICE = asignar(5,'12');
        $SUPP = asignar(6,'05859-4');
                
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto('JCPenney',0,48,1,0,$arial,$black,11,0,0);
        
        texto('WWW.JCPENNEY.COM',0,70,2,10,$arial,$black,4.5,0,0);
        
        imageline($img,0,74,168,74,$black);
        imageline($img,0,75,168,75,$black);
        
        texto('Size:',10,90,0,0,$arial,$black,8,0,0);
        
        texto($SIZE,10,118,0,0,$arialBold,$black,20,0,0);
        
        texto($COLOR,0,155,1,0,$arial,$black,8,0,0);
        
        imageline($img,0,161,168,161,$black);
        imageline($img,0,162,168,162,$black);
        
        texto($STYLE,10,175,0,0,$arial,$black,6,0,0);
        
        texto('SUPP '.$SUPP,0,175,2,10,$arial,$black,6,0,0);
        
        perforacion(150, 300, 248);
        
        $start = texto($PRICE,0,285,1,0,$arialBold,$black,18,0,0);
        texto('$',$start-8,280,0,0,$arialBold,$black,12,0,0);
        
        // Creacion del Barcode
        barcode($UPC,6,155,1.2,77,'UPC');
        barcodeTexto(1, 0, 0, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
