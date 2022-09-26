<?php                     //   1       2       3      4     5         6
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'M');
        $STYLE = asignar(3,'EM-K10009');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'28.00');
        $DESCRIPTION = asignar(6,'BASEBALL KNIT');
                       
            // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar 
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('ECKOLOGO.ttf');
        
        
        // Introducimos los datos
        agujero(75, 30);
        
        texto('E',0,105,1,0,$logo,$black,50,0,0);
        texto('®',120,70,0,0,$arialBold,$black,8,0,0);
        
        texto('STYLE:',9,138,0,0,$arial,$black,7,0,0);
        texto($STYLE,9,153,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',0,138,2,5,$arial,$black,7,0,0);
        texto($COLOR,0,153,2,5,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,9,167,0,0,$arial,$black,7,0,0);
        
        cajaRellena(1,250,148,25,$vicsColor,$vicsColor);
        texto($SIZE,0,270,1,0,$arialBold,$white,15,0,0);
        
        perforacion(150, 400, 350);
        
        texto('MSRP $'.sinSigno($PRICE),0,387,1,0,$arialBold,$black,14,0,0);
        
        
         // Creacion del Barcode
        barcode($UPC,10,165,1.1,70,'UPC');
        
        barcodeTexto(2,0,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
