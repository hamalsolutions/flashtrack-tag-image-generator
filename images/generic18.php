<?php                      //   1       2      3      4
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'3313');
        $COLOR = asignar(2,'84');
        $UPC = asignar(3,'91796331355');
        $SIZE = asignar(4,'X-LARGE');
        
        // Creacion del formato
        formato(150,300,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('TRAIL CREST',0,25,1,0,$arial,$black,12,0,0);

        texto('STYLE# ',20,50,0,0,$arialBold,$black,10,0,0);
        texto($STYLE,90,50,0,0,$arialBold,$black,10,0,0);
        
        texto('COLOR: ',20,70,0,0,$arialBold,$black,10,0,0);
        texto($COLOR,90,70,0,0,$arialBold,$black,10,0,0);
        
        texto('SIZE   '.$SIZE,0,280,1,0,$arial,$black,11,0,0);

        texto(formatizarTexto('1 2 3 4 5 6    7 8 9 0 1 2',$UPC),0,180,1,0,$arial,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,210,3,1.3,80,'UPC',90);

        barcodeTexto(-1,0,0,7,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>