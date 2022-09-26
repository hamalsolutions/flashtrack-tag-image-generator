<?php                      //   1             2     3      4         5      
    $correctos = array('QTY','DESCRIPTION','SIZE','UPC','PRICE','FEATURES');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Andrea Shrug');
        $SIZE = asignar(2,'XS/4');
        $UPC = asignar(3,'JT1510650-0001-17020');
        $PRICE = asignar(4,'44.90');
        $FEATURES = asignar(5,'Cozy knit fabric~Draped shawl collar~Zipper front closure');
                       
            // Creacion del formato
        formato(200,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Your New Fabletics',0,20,1,0,$arial,$black,9,0,0);
        texto('Shrug Features:',0,35,1,0,$arial,$black,9,0,0);
        
        $FEATURE = explode("~",$FEATURES);
        $y = 42;
        foreach($FEATURE as $string)
        {
            $y += 14;
            texto('•'.$string,0,$y,1,0,$arial,$black,9,0,0);
        }
                            
        texto('TAG MUST REMAIN ATTACHED',0,107,1,0,$arialBold,$black,8,0,0);
        texto('FOR EXCHANGES & RETURNS',0,117,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION.' | '.$SIZE,0,132,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,253,1,0,$arial,$black,14,0,1);
        
        texto('FABLETICS.COM',0,290,1,0,$arial,$black,10,0,0);
        
        texto($UPC,0,210,1,0,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,160,1,40,'128');
        
        require_once('../includes/footer.php');
    }
?>
