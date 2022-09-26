<?php                               //       1          2          3           4           5
    $correctos = array('QTY','STYLE','UPC','COLOR','SIZE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'2DME154');
        $UPC = asignar(2,'813698010004');
        $COLOR = asignar(3,'HTHR');
        $SIZE = asignar(4,'XXL');
        $DESCRIPTION = asignar(5,'EYE SEE YOU MENS SS TEE');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto($SIZE,0,20,1,0,$arialBold,$black,10,0,0);        

        texto($COLOR,0,40,1,0,$arial,$black,8,0,0);        

        texto($STYLE,0,55,1,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,70,1,0,strlen($DESCRIPTION)>20?$arialNarrow:$arial,$black,strlen($DESCRIPTION)>20?6.5:7.5,0,0);
    
    
        // Creacion del Barcode
        barcode($UPC,11,78,1.1,52,'UPC');
        
        barcodeTexto(1.5,0,0,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
