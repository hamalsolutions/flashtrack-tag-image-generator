<?php                    //    1         2          3      4         5          6
    $correctos = array('QTY','SKU','DESCRIPTION','COLOR','UPC','PRE-PACK PCS','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SKU = asignar(1,'1239076-7');
        $DESCRIPTION = asignar(2,'DESPICABLE ME');
        $COLOR = asignar(3,'WHITE');
        $UPC = asignar(4,'400012390760');
        $PREPACK = asignar(5,'6 PCS');
        $PRICE = asignar(6,'$21.95');
        
        // Creacion del formato
        formato(150,200,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $fontConFondo = fuente('invers.ttf');
        
        // Introducimos los datos
        texto($SKU,0,38,3,65,$arialBold,$black,17,90,0);
        
        texto($DESCRIPTION,0,60,3,65,$arialBold,$black,8,90,0);
        
        texto($COLOR,0,90,2,75,$arial,$black,9,90,0);
        
        $PREPACK = str_replace(' ','',$PREPACK);
        $PREPACK = str_replace('PCS','',$PREPACK);
        $PREPACK = str_replace('PC','',$PREPACK);
        
        texto('PCS',texto($PREPACK,15,135,0,0,$fontConFondo,$black,10,90,0),135,0,0,$arial,$black,10,90,0);
        
        texto($PRICE,0,135,2,75,$arial,$black,10,90,1);
        
        
        // Creacion del Barcode
        barcode($UPC,185,19,1,42,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
