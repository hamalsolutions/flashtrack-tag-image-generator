<?php                    //    1        2     3     4       5            6          7        8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE-L','PRICE-H','DEPT','SAVINGS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BONE');
        $SIZE = asignar(2,'2');
        $STYLE = asignar(3,'S16-5002B');
        $UPC = asignar(4,'828605668629');
        $PRICEL = asignar(5,'$34.99');
        $PRICEH = asignar(6,'68.00');
        $DEPT = asignar(7,'926');
        $SAVINGS = asignar(8,'48% Savings');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialBoldSlash = fuente('Arial_Slash_bld.ttf');
                
        // Introducimos los datos
        agujero(84, 25);
        
        texto($DEPT,0,54,1,0,$arial,$black,8,0,0);
        
        texto($STYLE,0,76,1,0,$arial,$black,8,0,0);
        
        texto($COLOR,0,96,1,0,$arial,$black,8,0,0);
        
        texto('SIZE '.$SIZE,0,115,1,0,$arial,$black,8,0,0);
        
        texto('MARKET PRICE',0,200,1,0,$arial,$black,8,0,0);
        
        texto($PRICEH,0,220,1,0,$arialBoldSlash,$black,9,0,1);
        
        texto('YOU PAY',0,240,1,0,$arial,$black,7,0,0);
        
        texto($PRICEL,0,264,1,0,$arialBold,$black,11,0,1);
        
        texto($SAVINGS,0,289,1,0,$arialBold,$black,10,0,0);
        
        texto(formatizarTexto('1    23456   78901    2',$UPC),0,176,1,0,$arial,$black,9,0,0);
        
         // Creacion del Barcode
        barcode($UPC,14,111,1.2,52,'UPC');
        
        
        require_once('../includes/footer.php');
    }
?>
