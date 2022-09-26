<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'R6253AEI');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'28');
        $UPC = asignar(4,'886349123170');
        $PRICE = asignar(5,'128.00');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $logo = fuente('EPC_Logo.ttf');
        $saksLogo = fuente('SaksFifthAvenue_Logo.ttf');

        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',100,37,0,0,$logo,$black,27,0,0);
        texto('S',100,125,1,0,$saksLogo,$black,62,0,0);
        
        texto('STYLE '.$STYLE,0,165,1,0,$arialBold,$black,6,0,0);

        texto('SIZE '.$SIZE,0,180,1,0,$arialNarrowBold,$black,8,0,0);

        texto('COLOR '.$COLOR,0,193,1,0,$arialBold,$black,6,0,0);

        texto($PRICE,0,315,1,0,$arialNarrowBold,$black,14,0,1);

        // Creacion del Barcode
        barcode($UPC,18,205,1,60,'UPC');
        
        barcodeTexto(3,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
