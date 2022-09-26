<?php                      //      1         2       3       4     5      6
    $correctos = array('QTY','STYLE NAME','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLENAME = asignar(1,'IDEAL V-NECK TEE');
        $STYLE = asignar(2,'WK1345');
        $COLOR = asignar(3,'001 WHITE');
        $SIZE = asignar(4,'XS');
        $UPC = asignar(5,'848239056043');
        $PRICE = asignar(6,'75.00');
        
            // Creacion del formato
        formato(105,249,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');
        $arial = fuente('arial.ttf');
        $arialNBold = fuente('arialnb.ttf');
        // Introducimos los datos

        texto($STYLENAME,0,30,1,0,$arial,$black,7,0,0);
        
        texto($STYLE,0,55,1,0,$arialNBold,$black,8,0,0);
        
        texto($COLOR,0,70,1,0,$arialNBold,$black,7,0,0);
        
        texto('SIZE: '.$SIZE,0,100,1,0,$arialNBold,$black,9,0,0);

        texto('MSRP:',0,125,1,0,$arialNBold,$black,10,0,0);
        texto($PRICE,0,145,1,0,$arialNBold,$black,11,0,1);

        // Creacion del Barcode
        barcode($UPC,-4,160,1,60,'UPC');
        texto(formatizarTEXTO('123456 123456',$UPC),0,235,1,0,$arialNarrow,$black,10,0,0);

        require_once('../includes/footer.php');
    }
?>
