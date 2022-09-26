<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'INDIGO');
        $SIZE = asignar(2,'XXL');
        $STYLE = asignar(3,'RF-00B881IND');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'78.00');
        $DESCRIPTION = asignar(6,'REEF CLASSICAL ICON');
                       
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto($STYLE,0,55,1,0,$arial,$black,9,0,0);
        
        texto($DESCRIPTION,0,73,1,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,91,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,110,1,0,$arialBold,$black,10,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6 7 8 9 0 1 2', $UPC),0,185,1,0,$arial,$black,8.5,0,0);
        
        perforacion();
        
        if (!empty($PRICE)) {
            texto('SUGGESTED',15,275,0,0,$arial,$black,7,0,0);
            texto('RETAIL',15,285,0,0,$arial,$black,7,0,0);
            texto($PRICE,0,285,2,20,$arialBold,$black,12,0,1);
        }
        
         // Creacion del Barcode
        barcode($UPC,15,100,1.2,70,'UPC');
        
        //barcodeTexto(2,0,1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
