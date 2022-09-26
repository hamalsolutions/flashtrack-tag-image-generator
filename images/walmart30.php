<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','STYLE','SEASON','COLOR','SIZE','UPC','PRICE','FINELINE','DEPT','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'GTJAN-32');
        $SEASON = asignar(2,'0113');
        $COLOR = asignar(3,'BLUE');
        $SIZE = asignar(4,'S (3/5)');
        $UPC = asignar(5,'716068367923');
        $PRICE = asignar(6,'5.88');
        $FINELINE = asignar(7,'6815');
        $DEPT = asignar(8,'034');
        $SUB= asignar(9,'00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $darkBlue = color(25, 69, 178);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('WalMart_Logo2.ttf');
        
        agujero(75, 25);
        
        texto('W',15,55,0,0,$logo,$darkBlue,27,0,0);
                
        cajaVacia(6, 62, 137, 31, $darkBlue);
        
            // Introducimos los datos
        texto('SIZE',10,72,0,0,$arial,$darkBlue,6,0,0);
        texto($SIZE,0,85,1,0,$arial,$black,14,0,0);
        
        texto($SUB,10,107,0,0,$arial,$black,8,0,0);
        texto('F/L',25,107,0,0,$arial,$black,8,0,0);
        texto($FINELINE,43,107,0,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,107,2,10,$arial,$black,8,0,0);
        
        texto($SEASON,10,122,0,0,$arial,$black,8,0,0);
        
        texto($STYLE,0,122,2,10,$arial,$black,8,0,0);
        
        texto($DEPT,0,140,2,30,$arial,$black,8,0,0);
        
        texto($PRICE,0,240,1,0,$arial,$black,16.5,0,1);
        
        texto('Save money, Live better.',0,260,1,0,$arialBold,$darkBlue,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,11,135,1.1,65,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>