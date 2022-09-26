<?php                       //   1       2       3     4     5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'OT1011');
        $COLOR = asignar(2,'90');
        $SIZE = asignar(3,'XS');
        $UPC = asignar(4,'884616098831');
        $DESCRIPTION = asignar(5,"M'S OT CREST SS T");
        
        // Creacion del formato
        formato(125,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        parrafo($DESCRIPTION, 0, 135, 1, 0, $arial, $black, 7, 0, 20, 10);
        //texto($DESCRIPTION,0,135,1,0,$arial,$black,7,0,0);
        
        texto(' Style     Color   Size',7,170,0,0,$arial,$black,9,0,0);
        texto($STYLE,0,184,3,70,$arial,$black,7,0,0);
        texto($COLOR,0,184,3,-15,$arial,$black,7,0,0);
        texto($SIZE,0,184,3,-85,$arial,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,5,25,1,70,'UPC');
        
        barcodeTexto(2,0,-1,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
