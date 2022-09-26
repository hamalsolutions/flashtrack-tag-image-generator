<?php                    //     1       2      3       4     5      6          7   
    $correctos = array('QTY','SIZE','CLASS','SEASON','SKU','UPC','PRICE','DESCRIPTION');
    
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'Small');
        $CLASS = asignar(2,'958');
        $SEASON = asignar(3,'S13');
        $SKU = asignar(4,'60348319');
        $UPC = asignar(5,'609328240930');
        $PRICE = asignar(6,'20.00');
        $DESCRIPTION = asignar(7,'CHUCK RESCUE');
        
        // Creacion del formato
        formato(300,169,255,255,255,90);
        
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
        
        agujero(25, 85);
        
        texto($DESCRIPTION,0,50,1,0,$arial,$black,strlen($DESCRIPTION)>15?8.5:9,90,0);
        
        texto($SIZE,0,70,1,0,$arialBold,$black,9,90,0);
        
        texto($CLASS,0,123,2,20,$arial,$black,8,90,0);
        
        texto('CL',0,135,2,20,$arial,$black,9,90,0);
        
        texto($SEASON,0,183,2,20,$arial,$black,8,90,0);
        
        texto('SEA',0,195,2,20,$arial,$black,9,90,0);
        
        texto('SKU',0,240,2,20,$arial,$black,9,90,0);
        
        texto($SKU,11,241,0,0,$arialBoldEsp,$black,8,90,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - - - - - - - - --',0,265,1,0,$arial,$black,7,90,0);
        
        texto($PRICE,0,290,1,0,$arial,$black,14,90,1);
        
        // Creacion del Barcode
        barcode($UPC,65,95,1,40,'UPC',90);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
