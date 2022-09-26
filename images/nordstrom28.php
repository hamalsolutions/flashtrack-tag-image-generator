<?php                      //    1       2      3     4      5      6       7       8
    $correctos = array('QTY', 'STYLE','COLOR','UPC','SIZE','DEPT','MSRP','PRICE','SAVINGS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'XT6559K2678R');
        $COLOR = asignar(2,'BLACK');
        $UPC = asignar(3,'19017251456');
        $SIZE = asignar(4,'3X');
        $DEPT = asignar(5,'149');
        $MSRP = asignar(6,'42.00');
        $PRICE = asignar(7,'21.97');
        $SAVINGS = asignar(8, '48%');

            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNB = fuente('arialnb.ttf');
        $arial = fuente('arial.ttf');
        $logo = fuente('NordstromRack_Logo-10-19-2016.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');

        // Introducimos los datos

        agujero(85,25);

        texto('n',0,60,1,0,$logo,$black,13,0,0);

        texto($STYLE,15,95,0,0,$arialNB,$black,9,0,0);
        
        texto($COLOR,15,110,0,0,$arialNB,$black,9,0,0);

        texto('Dept: '.$DEPT,15,200,0,0,$arialNB,$black,9,0,0);

        texto('Size:  '.$SIZE,15,220,0,0,$arialNB,$black,9,0,0);

        texto('COMPARE AT',15,260,0,0,$arial,$black,8,0,0);
        texto(sinSigno($MSRP),0,260,2,10,$arialBoldSlash,$black,10,0,0);

        texto(suffix($SAVINGS, ' Savings'), 15, 280, 0, 0, $arial, $black, 8, 0, 0);
        texto(sinSigno($PRICE),0,280,2,10,$arial,$black,10,0,0);

        // Creacion del Barcode
        barcode($UPC,10,90,1.3,80,'UPC');
        
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
