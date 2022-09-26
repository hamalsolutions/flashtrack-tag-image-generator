<?php                      //   1       2      3      4        5      6       7
    $correctos = array('QTY','STYLE','COLOR','DEPT','SEASON','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'283650LT');
        $COLOR = asignar(2,'RED/ROUGE');
        $DEPT = asignar(3,'414');
        $SEASON = asignar(4,'S15');
        $SIZE = asignar(5,'S/P');
        $UPC = asignar(6,'123456789012');
        $PRICE = asignar(7,'$23.67');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',100,37,0,0,$logo,$black,27,0,0);

        texto('Tadashi Shoji',0,60,1,0,$arialBold,$black,9,0,0);

        texto('STYLE/STYLE',10,75,0,0,$arial,$black,6,0,0);
        texto($STYLE,10,88,0,0,$arial,$black,7,0,0);

        texto('COLOR/COULEUR',75,75,0,0,$arial,$black,6,0,0);
        texto($COLOR,75,88,0,0,$arial,$black,6.5,0,0);

        texto('DEPT/RAYON',10,112,0,0,$arial,$black,6,0,0);
        texto($DEPT,10,125,0,0,$arial,$black,7,0,0);

        texto('SEASON/SAISON',75,112,0,0,$arial,$black,6,0,0);
        texto($SEASON,75,125,0,0,$arial,$black,6.5,0,0);

        texto('SIZE/TAILLE',10,280,0,0,$arial,$black,6.5,0,0);
        texto($SIZE,0,280,3,-70,$arial,$black,7,0,0);

        texto('Price/Prix',10,310,0,0,$arialBold,$black,9,0,0);
        texto($PRICE,0,310,3,-70,$arialBold,$black,13,0,1);

        
        // Creacion del Barcode
        barcode($UPC,18,150,1,55,'UPC');
        
        barcodeTexto(3,-1,-3,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
