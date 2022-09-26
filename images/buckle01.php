<?php                      //   1       2       3       4      5     6          7           8       9       10    
    $correctos = array('QTY','COLOR','SIZE','CLASS','STYLE','UPC','VENDOR','DESCRIPTION','SEASON','PRICE','DEPT');
    require_once('../includes/html.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BROWN');
        $SIZE = asignar(2,'LARGE');
        $CLASS = asignar(3,'720');
        $STYLE = asignar(4,'RTRO9541443');
        $UPC = asignar(5,'4206200100');
        $VENDOR = asignar(6,'48237');
        $DESCRIPTION = asignar(7,'PRINTED PLAID - L/S WOVEN MENS SHIRT');
        $SEASON = asignar(8,'082009');
        $PRICE = asignar(9,'14.99');
        $DEPT = asignar(10,'01');
        
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(128,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('bucklelogo.ttf');
                              
        // Introducimos los datos
        
        texto('1',22,70,0,0,$logo,$black,18,0,0);
        texto('2',104,70,0,0,$logo,$red,18,0,0);
        
        texto($VENDOR,10,94,0,0,$arial,$black,7,0,0);
        
        texto($STYLE,7,105,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,105,2,10,$arial,$black,7,0,0);
        
        parrafo($DESCRIPTION, 10, 122, 0, 0, $arial, $black, 6.5, 0, 25, 10);
        
        texto($SEASON,0,155,3,100,$arial,$black,7,0,0);
        
        texto($DEPT,0,155,1,0,$arial,$black,7,0,0);
        
        texto($CLASS,0,155,3,-100,$arial,$black,7,0,0);
        
        texto($SIZE,0,295,1,0,$arial,$black,10,0,0);
        
        imagettftext($img,10,0,0,350,$black,$arialBold,"-- - - - - - - - - - - - - - - - - - - --");
        
        texto($PRICE,0,380,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,22,155,1.1,100,'128');
        
        barcodeTexto(3,7,5,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
