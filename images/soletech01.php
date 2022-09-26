<?php                      //   1      2         3           4            5        6      7
    $correctos = array('QTY','ITEM','NAME','DESCRIPTION','COLOR_ID','COLOR_NAME','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $ITEM = asignar(1,'3130001082');
        $NAME = asignar(2,'APPROVED');
        $DESCRIPTION = asignar(3,'S/S TEE');
        $COLORID = asignar(4,'043');
        $COLORNAME = asignar(5,'GREY HEATHER');
        $SIZE = asignar(6,'S');
        $UPC = asignar(7,'885075672693');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
                
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
                
        texto($ITEM,18,55,0,0,$arialBold,$black,9,0,0);
        
        texto($NAME,18,73,0,0,strlen($NAME)>14?$arialNarrow:$arial,$black,strlen($NAME)>15?8.5:10,0,0);
        
        texto($DESCRIPTION,18,90,0,0,$arial,$black,11,0,0);
        
        texto('COLOR:',18,110,0,0,$arial,$black,11,0,0);
        
        texto($COLORID,85,110,0,0,$arial,$black,11,0,0);
        
        texto($COLORNAME,18,133,0,0,$arial,$black,11,0,0);
        
        texto('SIZE:',18,157,0,0,$arial,$black,11,0,0);
        
        texto($SIZE,70,158,0,0,$arialBold,$black,15,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,27,175,1,50,'UPC');
        
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
