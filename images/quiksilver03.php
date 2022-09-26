<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DESCRIPTION','COLOR CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Black');
        $SIZE = asignar(2,'L');
        $STYLE = asignar(3,'758300033');
        $UPC = asignar(4,'123456789128');
        $PRICE = asignar(5,'$38.00 USD');
        $DESCRIPTION = asignar(6,'DESCRIPTION GOES HERE');
        $COLORCODE = asignar(7,'CRL CODE');
        
        
        // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(200,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arial = fuente('arial.ttf');
        $logo = fuente('Quiksilver_Logo2015.ttf'); 
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto('q',5,75,0,0,$logo,$black,28,0,0);
        
        texto($DESCRIPTION,0,115,1,0,$arial,$black,7,0,0);
        
        texto('STYLE',10,230,0,0,$arial,$black,8,0,0);
        texto($STYLE,10,245,0,0,$arial,$black,7.5,0,0);
        
        texto('COLOR',0,230,2,10,$arial,$black,8,0,0);
        texto($COLORCODE,0,245,2,10,$arial,$black,7.5,0,0);
        
        texto($COLOR,0,265,2,10,$arial,$black,strlen($COLOR)>14?6:7,0,0);
        texto($SIZE,10,265,0,0,$arial,$black,7,0,0);
        
        cajaRellena(1,310,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,330,1,0,$arialBold,$black,12,0,0);
        
        perforacion(150, 400, 362);        
        
        $strPrice = str_replace("USD","",str_replace("$", "", $PRICE));
        if(strlen($strPrice) > 3){
          texto($strPrice." USD",0,385,1,0,$arialBold,$black,11,0,1);
        }
        
        // Creacion del Barcode
        barcode($UPC,12,110,1.1,80,'UPC');
        
        barcodeTexto(0.5,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
