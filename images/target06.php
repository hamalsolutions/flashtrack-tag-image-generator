<?php                       //  1     2     3       4          5
    $correctos = array('QTY','ITEM','UPC','SIZE','COLOR','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $ITEM = asignar(1,'118787621');
        $UPC = asignar(2,'787026292137');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'White');
        $DESCRIPTION = asignar(5,'Wing It L/s Thermal');
                       
            // Creacion del formato
        formato(200,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,0,20,1,0,$arial,$black,11,0,0);
        
        texto('Size: '.$SIZE,0,38,1,0,$arial,$black,11,0,0);
        
        texto('Color: '.$COLOR,0,56,1,0,$arial,$black,11,0,0);
        
        texto($ITEM,0,78,1,0,$arial,$black,11,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,65,1.3,68,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>