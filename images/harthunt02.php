<?php                      //   1      2       3      4      5         6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
         // Valores por default para presentar en el formato
        $COLOR = asignar(1,'WHITE');
        $SIZE = asignar(2,'SM');
        $STYLE = asignar(3,'49229-00');
        $UPC = asignar(4,'885008024216');
        $PRICE = asignar(5,'16.00');
        $DESCRIPTION = asignar(6,'MY WAY TUBE TOP');
        
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('hnhLogo.ttf');
        
        // Introducimos los datos
        
        texto('z',0,100,1,0,$logo,$black,70,0,0);
        
        texto($STYLE,10,135,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,135,2,10,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,0,235,1,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,0,269,1,0,$arialNarrow,$black,16,0,0);
        
        imagettftext($img,10,0,0,285,$black,$arialBold,'-- - - - - - - - - - - - - - - - - - - --');
        
        texto($PRICE,0,312,1,0,$arialNarrow,$black,17,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,129,1.1,72,'UPC');
        
        barcodeTexto(3,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
