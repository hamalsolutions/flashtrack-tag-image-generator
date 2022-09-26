<?php                       //  1     2     3       4          5
    $correctos = array('QTY','STYLE','UPC','SIZE','COLOR','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $STYLE = asignar(1,'F1746FNT1');
        $UPC = asignar(2,'787026292137');
        $SIZE = asignar(3,'S');
        $COLOR = asignar(4,'HTHR GREY');
        $DESCRIPTION = asignar(5,'AMERICAN DREAMS');
                       
            // Creacion del formato
        formato(300,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,15,25,0,0,$arial,$black,16,0,0);
        
        texto($DESCRIPTION,15,45,0,0,$arial,$black,12,0,0);
        
        texto($COLOR,15,65,0,0,$arial,$black,12,0,0);
        
        imageline($img,223,1,223,148,$black);
        imageline($img,223,42,298,42,$black);
        
        texto('SIZE',230,15,0,0,$arial,$black,8,0,0);
        texto($SIZE,0,40,3,-225,$arial,$black,19,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,25,60,1.3,67,'UPC');
        
        barcodeTexto(1,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>