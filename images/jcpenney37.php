<?php                    //     1       2      3      4      5 
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'OY1141829EMC');
        $COLOR = asignar(2,'BLK');
        $UPC = asignar(3,'123456789104');
        $SIZE = asignar(4,'S');
        $PRICE = asignar(5,'20');
        
        // Creacion del formato 1.50" x 3"
        formato(150,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $priceFont = fuente('PL_Helv_Neue_75Std_Bold.ttf');
        $arialBold = fuente('arialbd.ttf');        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('OCEAN CURRENT',0,55,1,0,$arialBold,$black,8,0,0);
        
        texto($STYLE,10,85,0,0,$arialBold,$black,8,0,0);
        texto($COLOR,0,85,2,10,$arialBold,$black,8,0,0);
        
        texto($SIZE,0,205,1,0,$arialBold,$black,16,0,0);
        
        perforacion();
        
        texto($PRICE,0,280,1,0,$priceFont,$black,12,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,100,1,70,'UPC');
        
        barcodeTexto(2,-1,-3,6,'arial.ttf');
                
        require_once('../includes/footer.php');
    }
?>