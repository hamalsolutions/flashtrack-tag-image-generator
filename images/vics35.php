<?php                     //   1       2       3      4      5        6      7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $COLOR = asignar(1,'FUSBLK');
        $SIZE = asignar(2,'2T');
        $STYLE = asignar(3,'DLDT8820BM');
        $UPC = asignar(4,'885347132467');
        $PRICE = asignar(5,'52.00');
        $DESCRIPTION = asignar(6,'DESCRIPTION');
      
                       
            // Creacion del formato
        formato(300,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $gray = color(100,100,100);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('PinkViolet.ttf');
        
        // Introducimos los datos
        
        texto('PINK & VIOLET',0,25,3,150,$arialBold,$black,9,0,0);
      
        agujero(75, 43);
        texto($STYLE,9,62,0,0,$arial,$black,6,0,0);
        texto($COLOR,0,62,2,155,$arial,$black,6,0,0);
        
        cajaRellena(160,18,130,235,$black,$black);
        agujero(225, 43);
        texto('p',44,290,0,0,$logo,$white,96,90,0);
        texto('&',192,220,0,0,$logo,$gray,96,90,0);
        
        cajaRellena(1,157,148,23,$vicsColor,$vicsColor);
        imageline($img,150,0,150,325,$black);
        
        texto($SIZE,0,177,3,58,$arialBold,$black,15,0,0);
        texto($SIZE,0,175,3,56,$arialBold,$white,14,0,0);        
        
        texto($DESCRIPTION,10,200,0,0,$arialBold,$black,9,0,0);
        
        perforacion(300, 325, 270);
        
        if ($PRICE) {
            texto('MSRP',25,295,0,0,$arial,$black,6.5,0,0);
            texto($PRICE,0,295,3,135,$arialBold,$black,14,0,1);
        }        
        
        
         // Creacion del Barcode
        barcode(str_replace('-','',$UPC),10,60,1.1,86,'UPC');
        
        barcodeTexto(1,0,-3,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
