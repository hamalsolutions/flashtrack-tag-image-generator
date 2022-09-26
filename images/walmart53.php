<?php                     //    1       2      3      4     5        6            7          8
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DEPT','FINELINE','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MJN1163');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'XXL');
        $UPC = asignar(4,'123456789012');
        $DEPT = asignar(5,'024');
        $PRICE = asignar(6,'19.00');
        $FINELINE = asignar(7,'00 F/L 46');
        $DESCRIPTION= asignar(8,'DESCRIPTION');
        $PRICE= asignar(9,'19.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $darkBlue = color(57, 118, 184);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $logo = fuente('WalMart_Logo2.ttf');
        
        agujero(75, 25);
        
        texto('W',15,55,0,0,$logo,$darkBlue,27,0,0);
                
        cajaVacia(15, 62, 120, 31, $darkBlue);
        
            // Introducimos los datos
        texto('SIZE',19,73,0,0,$arial,$darkBlue,6,0,0);
        texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
        
        texto($DEPT,0,107,2,15,$arialNarrow,$black,8,0,0);
        
        texto($STYLE,10,120,0,0,$arialNarrow,$black,8,0,0);
        
        texto($COLOR,0,120,2,15,$arialNarrow,$black,8,0,0);
        
        texto($FINELINE,0,135,1,0,$arialNarrow,$black,8,0,0);
        
        texto($DESCRIPTION,0,210,1,0,$arialNarrowBold,$black,8,0,0);
        
        texto($PRICE,0,240,1,0,$arialNarrow,$black,14,0,1);
        
        texto('Save money, Live better.',0,260,1,0,$arial,$darkBlue,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,11,125,1.1,55,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>