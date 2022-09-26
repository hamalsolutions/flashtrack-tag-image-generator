<?php                     //   1       2       3      4     5 
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'51554022-01');
        $COLOR = asignar(2,'BLACK');
        $SIZE = asignar(3,'4');
        $UPC = asignar(4,'96413077319');
        $PRICE = asignar(5,'16.00');
                      
            // Creacion del formato
        formato(125,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $trukColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logoTrukfit = fuente('TRUKFIT_LOGO.ttf');
        // Introducimos los datos
        
        texto('T',0,47,1,0,$logoTrukfit,$black,35,0,0);
        
        texto($STYLE,9,82,0,0,$arial,$black,7,0,0);
        texto($COLOR,0,82,2,5,$arial,$black,7,0,0);
        
        cajaRellena(1,195,147,25,$trukColor,$trukColor);
        texto($SIZE,0,215,2,5,$arialBold,$black,15,0,0);
        
        
        if ($PRICE<>'') {
            texto('MANUFACTURERS',10,300,0,0,$arial,$black,5,0,0);
            texto('SUGGESTED',10,308,0,0,$arial,$black,5,0,0);
            texto('RETAIL PRICE',10,316,0,0,$arial,$black,5,0,0);
        }
        perforacion(125, 325, 290);
        texto($PRICE,0,314,2,5,$arialBold,$black,11,0,1);
        
        
         // Creacion del Barcode
        barcode($UPC,5,110,1.0,60,'UPC');
        
        barcodeTexto(2,0,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
