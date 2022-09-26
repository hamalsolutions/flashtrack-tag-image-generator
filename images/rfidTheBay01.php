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
        $PRICE = asignar(7,'$125.00');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        agujero(75, 25);
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $myriadIt = fuente('MYRIADPRO-BOLDIT.OTF');
        $logo = fuente('EPC_Logo.ttf');
        $logo2 = fuente('a.ttf');

            // Introducimos los datos
        texto('E',107,37,0,0,$logo,$black,22,0,0);
        texto('2',30,86,0,0,$logo2,$black,23,0,0);
        texto('STYLE/STYLE',10,106,0,0,$arial,$black,6,0,0);
        texto($STYLE,10,120,0,0,$arial,$black,7,0,0);
        texto('COLOR/COULEUR',70,106,2,7,$arial,$black,6,0,0);
        texto($COLOR,75,120,2,8,$arial,$black,6.5,0,0);
        texto('DEPT/RAYON',10,133,0,0,$arial,$black,6,0,0);
        texto($DEPT,10,146,3,75,$arial,$black,6.5,0,0);
        texto('SEASON/SAISON',0,133,2,7,$arial,$black,6.5,0,0);
        texto($SEASON,80,146,3,-70,$arial,$black,6.5,0,0);
        texto('SIZE/TAILLE',10,246,0,0,$arial,$black,7,0,0);
        texto($SIZE,0,246,3,-80,$arialBold,$black,10,0,0);
        texto('Price/Prix',10,310,0,0,$arialBold,$black,7,0,0);
        texto($PRICE,0,310,3,-70,$myriadIt,$black,12,0,1);

        // Creacion del Barcode
        barcode($UPC,18,154,1,55,'UPC');
        
        barcodeTexto(3,-1,-3,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
