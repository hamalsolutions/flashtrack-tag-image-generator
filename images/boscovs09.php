<?php                      //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'M1084APO');
        $COLOR = asignar(2,'BBC');
        $SIZE = asignar(3,'4');
        $UPC = asignar(4,'614015851122');
        $PRICE = asignar(5,'40.00');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        agujero(85,25);

            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,60,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,60,2,10,$arial,$black,8,0,0);
        
        texto($SIZE,0,180,2,28,$arialBold,$black,15,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,259,1,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,286,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,14,60,1.2,85,'UPC');
        
        barcodeTexto(1,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
