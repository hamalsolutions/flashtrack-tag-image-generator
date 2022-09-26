<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION','COUNTRY','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'RF-00H114');
        $COLOR = asignar(2,'HEATHER/GREY');
        $SIZE = asignar(3,'M');
        $UPC = asignar(4,'884616098831');
        $DESCRIPTION = asignar(5,'REEF AUTHENTIC CIRCLE H');
        $COUNTRY = asignar(6,'MADE IN PAKISTAN');
        $PRICE = asignar(7,'52.00');
                
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        setAsSticker(10);
        
        texto($STYLE,0,27,1,0,$arial,$black,10,0,0);
        
        texto($DESCRIPTION,0,42,1,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,57,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,77,1,0,$arial,$black,12,0,0);
        
        texto($COUNTRY,0,175,1,0,$arial,$black,8,0,0);
        
        texto('Suggested Retail',10,190,0,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,190,2,15,$arial,$black,8,0,1);
        
         // Creacion del Barcode
        barcode($UPC,11,60,1.5,87,'UPC');
        
        barcodeTexto(1.5,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
