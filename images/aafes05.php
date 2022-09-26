<?php                      //   1       2       3          4         5      6       7      8
    $correctos = array('QTY','STYLE','SEASON','DEPT','STYLE NAME','COLOR','SIZE','PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'DH933901');
        $SEASON = asignar(2,'SS16');
        $DEPT = asignar(3,'1370');
        $STYLE_NAME = asignar(4,'GOT BARS');
        $COLOR = asignar(5,'NAVY');
        $SIZE = asignar(6,'S');
        $PRICE = asignar(7,'9.99');
        $UPC = asignar(8,'094134875375');
        
            // Creacion del formato
        formato(275,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $logo = fuente('Xchange_Logo.ttf');
        
        // Introducimos los datos
        texto('A',15,40,0,0,$logo,$black,24,270,0);
        texto('EXCHANGE',10,50,0,0,$arial,$black,6,270,0);

        texto($SEASON,10,70,0,0,$arialNarrowBold,$black,8,270,0);
        texto($DEPT,10,70,2,10,$arialNarrowBold,$black,8,270,0);

        texto($STYLE_NAME,10,85,0,0,$arialNarrowBold,$black,6,270,0);
        texto($STYLE,10,100,0,0,$arialNarrowBold,$black,8,270,0);
        
        texto($SIZE,0,125,3,-58,$arialNarrowBold,$black,10,270,0);
        texto($COLOR,0,150,3,-62,$arialNarrowBold,$black,8,270,0);
        
        texto($PRICE,0,260,1,0,$arialNarrowBold,$black,16,270,1);
        
        // Creacion del Barcode
        barcode($UPC,10,220,1,40,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>