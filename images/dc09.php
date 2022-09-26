<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','PO');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HGR');
        $SIZE = asignar(2,'L');
        $STYLE = asignar(3,'51200063');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'USD $22.00');
        $DESCRIPTION = asignar(6,'STAR SS');
        $PO = asignar(7,'4500062572');
        
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_LogoPlain.ttf'); 
        
        // Introducimos los datos
        
        agujero(85, 25);
        
        texto('D',0,90,1,0,$logo,$black,45,0,0);
        texto('®',115,45,0,0,$arialBold,$black,10,0,0);
        
        texto('STYLE',10,110,0,0,$arial,$black,9,0,0);
        texto($STYLE,0,110,2,10,$arial,$black,9,0,0);
        
        texto($DESCRIPTION,0,125,1,0,$arial,$black,8,0,0);
        
        texto('COLOR',10,140,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,140,2,10,$arial,$black,9,0,0);
        
        texto('SIZE',10,158,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,158,2,10,$arial,$black,9,0,0);
        
        texto($PO,15,171,0,0,$arial,$black,8.5,0,0);
        
        perforacion();
        //texto('-- - - - - - - - - - - - - -  - - - - --',0,248,1,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,275,1,0,$arial,$black,11,0,0);
        
        // Creacion del Barcode
        barcode($UPC,8,135,1.3,90,'UPC');
        
        barcodeTexto(0.5,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
