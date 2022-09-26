<?php              //    0      1       2      3      4       5        6        7       8          9
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','COO ENG','COO FR','COO SP','CA PRICE','US PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'PBLJAN-16');
        $COLOR = asignar(2,'CHARCOAL/GRIS FONCÉ/GRIS CARBON');
        $SIZE = asignar(3,'L/G/G');
        $UPC = asignar(4,'123456789104');
        $COO_EN = asignar(5,'MADE IN THAILAND');
        $COO_FR = asignar(6,'FABRIQUÉ AU THAïLANDE');
        $COO_SP = asignar(7,'HECHO EN TAILANDIA');
        $CA_PRICE = asignar(8,'14.99');
        $US_PRICE = asignar(9,'12.99');
        // Creacion del formato
        formato(600,125,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);

        //$vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arial = fuente('arial.ttf');
        $MyriadProBold = fuente('MyriadPro-Bold.otf');

        // Introducimos los datos
        
            $yPos = 75;
            
            for($i=1;$i<=4;$i++){
                texto($SIZE,0,$yPos,1,0,$arialBold,$black,12,90,0);
                $yPos += 55;
            }

        texto('T-SHIRT',0,265,1,0,$arial,$black,8,90,0);
        texto('T-SHIRT',0,278,1,0,$arial,$black,8,90,0);
        texto('CAMISA',0,291,1,0,$arial,$black,8,90,0);

        texto($COO_EN,0,310,1,0,$arialNarrowBold,$black,6,90,0);
        texto($COO_FR,0,320,1,0,$arialNarrowBold,$black,6,90,0);
        texto($COO_SP,0,330,1,0,$arialNarrowBold,$black,6,90,0);

        texto('HYBRID PROMOTIONS LLC',0,350,1,0,$arialNarrowBold,$black,6,90,0);
        texto('10711 WALKER STREET',0,360,1,0,$arialNarrowBold,$black,6,90,0);
        texto('CYPRESS, CA 90630 USA',0,370,1,0,$arialNarrowBold,$black,6,90,0);

        texto($COLOR,0,15,2,50,$arialNarrowBold,$black,8,0,0);
        texto($STYLE,0,37,2,120,$arialBold,$black,7,0,0);

        texto('CA $'.$CA_PRICE,0,565,1,0,$MyriadProBold,$black,14,90,0);
        texto('-- - - - - - - - - -  - -  - - - - - --',0,575,1,0,$arial,$black,8,90,0);
        texto('US $'.$US_PRICE,0,590,1,0,$MyriadProBold,$black,14,90,0);

        // Creacion del Barcode
        barcode($UPC,89,320,1.2,65,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>