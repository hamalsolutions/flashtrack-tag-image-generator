<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'HGR');
        $SIZE = asignar(2,'L');
        $STYLE = asignar(3,'51200063');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'22.00');
        $DESCRIPTION = asignar(6,'STAR SS');
        
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
         $gray = color(138, 138, 138);
        $transparent = transparente();
        $red = color(255,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_Logo.ttf'); 
        
        // Introducimos los datos
        
        imagefilledellipse($img,84,18,13,13,$transparent);
        imageellipse($img,84,18,13,13,$gray);
        
        texto('D',0,80,1,0,$logo,$black,45,0,0);
        
        texto('STYLE',10,115,0,0,$arial,$black,9,0,0);
        texto($STYLE,0,115,2,10,$arial,$black,9,0,0);
        
        texto($DESCRIPTION,0,130,1,0,$arial,$black,8,0,0);
        
        texto('COLOR',10,145,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,145,2,10,$arial,$black,9,0,0);
        
        texto('SIZE',10,163,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,163,2,10,$arial,$black,9,0,0);
        
        //texto('USD $'.sinSigno($PRICE),0,270,1,0,$arialBold,$black,9,0,0);
        
        texto('-- - - - - - - - - - - - - -  - - - - --',0,248,1,0,$arialBold,$black,10,0,0);
        
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        
            
            $start = texto($PRICE,0,285,1,0,$arialBold,$black,14,0,0);
            texto('$',$start-6,280,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,8,135,1.3,90,'UPC');
        
        barcodeTexto(0.5,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
