<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'STYLE');
        $COLOR = asignar(2,'COLOR');
        $SIZE = asignar(3,'SIZE');
        $UPC = asignar(4,'012345678912');
        $PRICE = asignar(5,'$125.00');
        
            // Creacion del formato
        formato(325,150,255,255,255,90);
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(25, 75);
        
        texto('E',10,37,0,0,$logo,$black,27,90,0);
        
        texto($STYLE,10,115,0,0,strlen($STYLE)>10?$arialNarrow:$arial,$black,strlen($STYLE)>12?9:10,90,0);
        
        texto($COLOR,10,145,0,0,strlen($COLOR)>10?$arialNarrow:$arial,$black,strlen($COLOR)>12?9:10,90,0);
        
        texto($SIZE,10,175,0,0,$arial,$black,10,90,0);
        
        texto($UPC,0,55,1,0,$arial,$black,10,0,0);
        
        texto('MSRP $'.sinSigno($PRICE),10,250,0,0,$arialBold,$black,10,90,0);
        
        
        // Creacion del Barcode
        barcode($UPC,138,68,1.3,25,'UPC',90);
        
        //barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
