<?php                    //     1          2          3      4
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'STYLE');
        $DESCRIPTION = asignar(2,'PPK1');
        $COLOR = asignar(3,'BLK');
        $UPC = asignar(4,'805099517541');
        
            // Creacion del formato 
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');

        // Introducimos los datos
        
        texto($STYLE,0,20,1,0,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION.' '.$COLOR,0,90,1,0,$arial,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,35,25,1.1,40,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
