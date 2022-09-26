<?php                    //     1      2      3       4     5      6          7
    $correctos = array('QTY','SKU','STYLE','COLOR','SIZE','UPC','MSRP','PRICE');

    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SKU = asignar(1,'SKU#');
        $STYLE = asignar(2,'LONG STYLE NAME');
        $COLOR = asignar(3,'COLOR');
        $SIZE = asignar(4,'SMALL');
        $UPC = asignar(5,'123456789104');
        $MSRP = asignar(6,'29.00');
        $PRICE = asignar(7,'19.99');
        
            // Creacion del formato 
        formato(200,200,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialnb.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');

        // Introducimos los datos
        texto($SKU,0,20,1,0,$arialNarrow,$black,8,0,0);
        texto($STYLE,0,40,1,0,$arialNarrow,$black,8,0,0);
        texto($COLOR,0,54,1,0,$arialNarrow,$black,8,0,0);

        texto($SIZE,0,70,2,40,$arialNarrow,$black,9,0,0);

        texto('Made in El Salvador',0,150,1,0,$arialNarrow,$black,8,0,0);
        texto('Like Style',50,165,0,0,$arialNarrow,$black,8,0,0);

        texto($MSRP,0,170,2,10,$arialBoldSlash,$black,8,0,1);
        texto($PRICE,0,190,2,10,$arialNarrow,$black,8,0,1);

        // Creacion del Barcode
        barcode($UPC,30,65,1.2,65,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
