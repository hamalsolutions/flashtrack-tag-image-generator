<?php                      //   1       2      3      4      5      6
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','GROUP NAME','PCS-SET');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'TS278JSP');
        $COLOR = asignar(2,'G&W');
        $SIZE = asignar(3,'2T');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$12.00');
        $GROUPNAME = asignar(6,'GROUP NAME');
        $PCS = asignar(7,'2 PC');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('EPC_Logo.ttf');
        
        // Introducimos los datos
        
        agujero(75, 25);
        
        texto('E',100,47,0,0,$logo,$black,27,0,0);
        
        texto($STYLE,10,85,0,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,85,2,10,$arial,$black,10,0,0);
        
        texto($SIZE,0,200,1,0,$arialBold,$black,12,0,0);
        
        texto($GROUPNAME,0,230,1,0,$arialBold,$black,9,0,0);

        texto($PCS,0,250,1,0,$arialBold,$black,9,0,0);
        
        texto($PRICE,0,290,1,0,$arialBold,$black,14,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,18,95,1,60,'UPC');
        
        barcodeTexto(2,-1,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
