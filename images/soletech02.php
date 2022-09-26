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
        formato(150,188,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
                
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
                
        texto($ITEM,20,25,0,0,$arialBold,$black,9,0,0);
        
        texto($NAME,20,43,0,0,strlen($NAME)>16?$arialNarrow:$arial,$black,strlen($NAME)>16?strlen($NAME)>25?6.5:7.5:9,0,0);
        
        texto($DESCRIPTION,20,58,0,0,$arial,$black,9,0,0);
        
        texto('COLOR:',20,75,0,0,$arial,$black,9,0,0);
        
        texto($COLORID,85,75,0,0,$arial,$black,9,0,0);
        
        texto($COLORNAME,20,95,0,0,$arial,$black,9,0,0);
        
        texto('SIZE:',20,113,0,0,$arial,$black,9,0,0);
        
        texto($SIZE,70,114,0,0,$arialBold,$black,13,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,17,120,1,50,'UPC');
        
        barcodeTexto(3,0,2,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
