<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','MSRP');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ABC1234');
        $COLOR = asignar(2,'Black');
        $SIZE = asignar(3,'Small');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$39.99');
        $MSRP = asignar(6,'$50.00');
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto($COLOR,0,61,1,0,$arial,$black,10,0,0);
        
        texto($STYLE,0,80,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,210,1,0,$arialBold,$black,12,0,0);
        
        texto('-- - - - - - - - - - - - - - - - --',0,258,1,0,$arial,$black,10,0,0);
        
        texto('MSRP $'.sinSigno($MSRP),5,280,0,0,$arialBoldSlash,$black,8,0,0);
        
        texto('------',5,280,0,0,$arial,$black,10,0,0);
        
        texto('Retail $'.sinSigno($PRICE),0,280,2,5,$arial,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,18,95,1,85,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
