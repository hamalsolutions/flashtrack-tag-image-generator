<?php                     //    1      2       3      4      5      6        7          8         9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','FINELINE','SEASON','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'LARGE (10/12)');
        $STYLE = asignar(3,'GTWM70048');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'4.88');
        $FINELINE = asignar(6,'550097029');
        $SEASON = asignar(7,'01-06');
        $DESCRIPTION = asignar(8,'YOUTH SHORT SLEEVE TEE');
        
            // Creacion del formato
        formato(132,700,245,245,245);
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(245,245,245);
        $darkGray = color(167,166,166);
        $white = color(255,255,255);
        $red = color(255,0,0);
        $blue = color(46,49,146);
        $transparent = transparente();
        //$transparent = color(255,255,255);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('gildan_logo.ttf');
        
        // Introducimos los datos
        
        cajaRellena(2,2,127,550,$transparent,$transparent);
        
        cajaRellena(2,68,127,62,$blue,$blue);
        
        texto('H',0,109,1,0,$logo,$darkGray,50,0,0);
        texto('G',0,109,1,0,$logo,$white,50,0,0);
        
        texto($PRICE,0,50,1,0,$arialNarrowBold,$black,30,0,1);
        
        $SIZE = str_replace(' ','',$SIZE);
        if (strpos($SIZE,'(')){
            $size1 = substr($SIZE,0,strpos($SIZE,'('));
            $size2 = substr($SIZE,strpos($SIZE,'('),strpos($SIZE,')'));
        } else {
            $size1 = $SIZE;
            $size2 = ' ';
        }
        
        $yPos = 155;
        for($i=1;$i<=5;$i++){
            cajaRellena(15,$yPos,100,50,$gray,$gray);
            if ($i % 2 == 0) {
                texto($size1,0,$yPos+20,1,0,$arialNarrowBold,$black,10,0,0);
                texto($size2,0,$yPos+40,1,0,$arialNarrowBold,$black,10,0,0);
            } else {
                parrafo($DESCRIPTION, 0, $yPos+20, 1, 0, $arialNarrowBold, $black, 10, 0, 11, 20);
            }
            $yPos += 80;
        }
        
        texto($COLOR,0,570,1,0,$arialNarrow,$black,10,0,0);
        
        texto($STYLE,5,585,0,0,$arialNarrow,$black,7.5,0,0);
        
        texto($FINELINE,0,585,2,5,$arialNarrow,$black,7.5,0,0);
        
        texto($SEASON,5,595,0,0,$arialNarrow,$black,7.5,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,10,603,1,60,'UPC');
        
        barcodeTexto(2,-1,-3,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>