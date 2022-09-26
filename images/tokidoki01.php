<?php                       //  1     2     3       4          5
    $correctos = array('QTY','STYLE','UPC','SIZE','COLOR','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $STYLE = asignar(1,'F1746FNT1');
        $UPC = asignar(2,'787026292137');
        $SIZE = asignar(3,'M');
        $COLOR = asignar(4,'HTHR GREY');
        $DESCRIPTION = asignar(5,'AMERICAN DREAMS');
                       
            // Creacion del formato
        formato(163,125,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,0,20,1,0,$arial,$black,8,0,0);
        
        texto($DESCRIPTION,0,35,1,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,50,1,0,$arial,$black,8,0,0);
        
        texto($SIZE,0,65,1,0,$arial,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,12,60,1.2,47,'UPC');
        
        barcodeTexto(1,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>