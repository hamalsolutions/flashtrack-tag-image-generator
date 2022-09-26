<?php                      //   1          2         3       4      5       6      
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','SIZE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WT01HM');
        $DESCRIPTION = asignar(2,'JUNIOR SLEEPWEAR');
        $COLOR = asignar(3,'VIOLET');
        $SIZE = asignar(4,'XS');
        $PRICE = asignar(5,'9.99');
        $UPC = asignar(6,'888057537775');
        
            // Creacion del formato
        formato(275,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('Xchange_Logo.ttf');
        
        // Introducimos los datos
        texto('A',25,50,0,0,$logo,$black,35,270,0);
        texto('EXCHANGE',10,60,0,0,$arial,$black,7.5,270,0);
        
        
        texto($DESCRIPTION,10,80,0,0,$arial,$black,7.5,270,0);
        texto($STYLE,10,90,0,0,$arial,$black,7.5,270,0);
        
        texto($SIZE,0,120,3,-62,$arial,$black,8,270,0);
        texto($COLOR,0,135,3,-62,$arial,$black,7.5,270,0);
        
        texto($PRICE,0,245,1,0,$arial,$black,12,270,1);
        
        // Creacion del Barcode
        barcode($UPC,10,215,1,40,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>