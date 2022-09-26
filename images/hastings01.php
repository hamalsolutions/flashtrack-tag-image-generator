<?php                      //   1      2       3      4      5 
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'Small');
        $STYLE = asignar(3,'TS3721BTM00HAER');
        $UPC = asignar(4,'885347077119');
        $PRICE = asignar(5,'18.99');
        $DESCRIPTION = asignar(6,'BATMAN LOGO DISTR JRS BLACK HOCK TE-S');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        agujero(84, 25);
        
        texto($DESCRIPTION,0,60,1,0,$arialNarrow,$black,6,0,0);
        
        if (strlen($COLOR)<13)
        {
            texto($COLOR,0,80,2,15,$arial,$black,7,0,0);
            texto($STYLE,10,80,0,0,$arial,$black,7,0,0);
        }
        else
        {
            texto($COLOR,0,80,2,5,$arial,$black,6,0,0);
            texto($STYLE,10,80,0,0,$arial,$black,6,0,0);
        }
        
        texto($SIZE,0,190,2,15,$arial,$black,14,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,75,1.2,85,'UPC');
        
        barcodeTexto(1,0,-4,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
