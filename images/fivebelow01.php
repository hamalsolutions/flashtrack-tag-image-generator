<?php                    //     1           2        3
    $correctos = array('QTY','STYLE','DESCRIPTION','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'PF-186');
        $DESCRIPTION = asignar(2,'Pink Floyd Darkside');
        $UPC = asignar(3,'400027190522');

            // Creacion del formato
        formato(170,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNarrowBold = fuente('arialnb.ttf');
        
        // Introducimos los datos

        agujero(85,25);

        texto($STYLE,0,75,1,0,$arialNarrowBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,105,1,0,$arialNarrowBold,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,8,105,1.3,105,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
