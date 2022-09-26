<?php                     //    1     2           3          4      5
    $correctos = array('QTY','UPC','STYLE','DESCRIPTION','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $UPC = asignar(1,'001234567895');
        $STYLE = asignar(2,'01192APGJO');
        $DESCRIPTION = asignar(3,'L/S CREW SWTSHRT');
        $COLOR = asignar(4,'GREY');
        $SIZE = asignar(5,'X-SMALL');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
            // Introducimos los datos
        
        texto($STYLE,15,30,0,0,$arial,$black,10,0,0);
        
        texto($DESCRIPTION,15,50,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,15,67,0,0,$arial,$black,10,0,0);
        
        texto($SIZE,15,85,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,20,75,1.3,95,'UPC');
        
        barcodeTexto(1,0,-5,8,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
