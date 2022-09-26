<?php                    //     1       2      3      4      5      6
    $correctos = array('QTY','DESC1','DESC2','UPC','PRICE','SKU','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESC1 = asignar(1,'GREEN LANTERN');
        $DESC2 = asignar(2,'GLOW LOGO');
        $UPC = asignar(3,'609328240930');
        $PRICE = asignar(4,'18.00');
        $SKU = asignar(5,'46944115');
        $CLASS = asignar(6,'0928');
        
        // Creacion del formato
        formato(300,125,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldEsp = fuente('Arial_Bold_Mod.ttf');
        
           // Introducimos los datos
        
        if (strlen($campo[2])>15)
            $fontSize = 8.5;
        else
            $fontSize = 9;
        
        parrafo($DESC1,0,48,1,0,$arialBold,$black,9,90,12,15);
        
        texto($DESC2,0,80,1,0,$arialBold,$black,$fontSize,90,0);
        
        texto($CLASS,0,123,2,15,$arial,$black,8,90,0);
        
        texto('CL',98,135,0,0,$arial,$black,6,90,0);
        
        texto('SKU',96,240,0,0,$arial,$black,6,90,0);
        
        texto($SKU,11,241,0,0,$arialBoldEsp,$black,9,90,0);
        
        texto($PRICE,0,290,1,0,$arial,$black,14,90,1);
        
        // Creacion del Barcode
        barcode($UPC,65,95,1,40,'UPC',90);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
