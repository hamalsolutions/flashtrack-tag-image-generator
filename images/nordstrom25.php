<?php                       //   1       2       3     4     5       6   
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'B3007JA-437');
        $COLOR = asignar(2,'GREY');
        $SIZE = asignar(3,'S');
        $UPC = asignar(4,'881759010713');
        $PRICE = asignar(5,'120.00');
        $DEPT = asignar(6,'84');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos         
        agujero(85, 25);
        
        texto($STYLE,20,75,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,90,2,15,$arial,$black,10,0,0);
        
        texto('Size:  '.$SIZE,20,170,0,0,$arial,$black,11,0,0);
        
        texto($DEPT,33,190,0,0,$arial,$black,9,0,0);
        texto('Dept',30,200,0,0,$arial,$black,8,0,0);
        
        perforacion();
        
        texto($PRICE,0,282,2,10,$arialBold,$black,11,0,1);
        
        // Creacion del Barcode
        barcode($UPC,13,85,1.2,60,'UPC');
        
        barcodeTexto(1,0,-7,8,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>