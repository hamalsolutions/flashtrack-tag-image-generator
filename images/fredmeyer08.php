<?php                    //     1       2      3      4      5      6
    $correctos = array('QTY','SIZE','DESCRIPTION','UPC','PRICE','SKU','CLASS','STYLE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'SIZE: S');
        $DESCRIPTION = asignar(2,'12SCRN/MINECRAFT');
        $UPC = asignar(3,'609328240930');
        $PRICE = asignar(4,'20.00');
        $SKU = asignar(5,'60348319');
        $CLASS = asignar(6,'958');
        $STYLE = asignar(7,'3617');
        
        // Creacion del formato
        formato(300,125,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldEsp = fuente('Arial_Bold_Mod.ttf');
        
           // Introducimos los datos
        
        //parrafo($SIZE,0,48,1,0,$arialBold,$black,9,90,12,15);
        
        $SIZE = str_replace('SIZE', '', $SIZE);
        $SIZE = str_replace(':', '', $SIZE);
        $SIZE = str_replace(' ', '', $SIZE);
        
        agujero(25, 62);
        
        texto('SIZE: '.$SIZE,0,50,1,0,$arialBold,$black,9,90,0);
        
        texto($DESCRIPTION,0,70,1,0,$arial,$black,strlen($DESCRIPTION)>15?8.5:9,90,0);
        
        texto($CLASS,0,123,2,10,$arial,$black,8,90,0);
        
        texto('CL',104,135,0,0,$arial,$black,6,90,0);
        
        texto($STYLE,0,183,2,10,$arial,$black,8,90,0);
        
        texto('STYLE',88,195,0,0,$arial,$black,6,90,0);
        
        texto('SKU',95,240,0,0,$arial,$black,6,90,0);
        
        texto($SKU,11,241,0,0,$arialBoldEsp,$black,8,90,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,265,1,0,$arial,$black,7,90,0);
        
        texto($PRICE,0,290,1,0,$arial,$black,14,90,1);
        
        // Creacion del Barcode
        barcode($UPC,65,95,1,40,'UPC',90);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
