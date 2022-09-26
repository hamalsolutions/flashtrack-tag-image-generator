<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','ITEM','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHARCOAL');
        $SIZE = asignar(2,'XL');
        $ITEM = asignar(3,'TF159456LEHJV18U2');
        $UPC = asignar(4,'885347077119');
        $PRICE = asignar(5,'18.00');
        $DEPT = asignar(6,'330');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Dept',15,35,0,0,$arial,$black,7,0,0);
        texto($DEPT,47,35,0,0,$arial,$black,7,0,0);
        
        texto('BEALLS',0,62,1,0,$arial,$black,15,0,0);
        
        if (strlen($COLOR)<13 && strlen($ITEM)<13)
        {
            texto($COLOR,0,80,2,5,$arial,$black,7,0,0);
            texto($ITEM,10,80,0,0,$arial,$black,7,0,0);
        }
        else
        {
            texto($COLOR,0,80,2,5,$arial,$black,6,0,0);
            texto($ITEM,10,80,0,0,$arial,$black,6,0,0);
        }
        
        texto($SIZE,0,185,1,0,$arialBold,$black,16,0,0);
        
        texto($PRICE,0,235,1,0,$arialBold,$black,16,0,1);
        
        perforacion();
        
        // Creacion del Barcode
        barcode($UPC,13,70,1.2,85,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
