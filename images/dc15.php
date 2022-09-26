<?php                    //     1       2      3      4       5     6     7       8    
    $correctos = array('QTY','STYLE','COLOR','DEPT','CLASS','SUB','UPC','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'758300033');
        $COLOR = asignar(2,'BLACK');
        $DEPT = asignar(3,'159');
        $CLASS = asignar(4,'10');
        $SUB = asignar(5,'12');
        $UPC = asignar(6,'795050332958');
        $SIZE = asignar(7,'S');
        $PRICE = asignar(8,'22.00');
        
        
        // Creacion del formato
        formato(150,400,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_TRADEMARK_Logo.ttf');
        
        // Introducimos los datos
        agujero(75, 18);
        
        texto('D',45,75,0,0,$logo,$black,45,0,0);
        
        texto('KOHL\'S',0,110,1,0,$arial,$black,7,0,0);
        
        texto($STYLE,10,125,0,0,$arial,$black,7.5,0,0);
        
        texto($COLOR,10,125,2,10,$arial,$black,strlen($COLOR)>11?6.5:7.5,0,0);
        
        texto($DEPT,30,145,0,0,$arial,$black,8,0,0);
        texto($CLASS,0,145,1,0,$arial,$black,8,0,0);
        texto($SUB,0,145,2,30,$arial,$black,8,0,0);
        
        cajaRellena(1,250,147,25,$vicsColor,$vicsColor);
        texto($SIZE,0,270,1,0,$arialBold,$black,18,0,0);
        
        perforacion(150, 400, 362);        
        
        texto('MSRP $'.$PRICE,0,385,1,0,$arialBold,$black,15,0,0);
        
        // Creacion del Barcode
        barcode($UPC,12,135,1.1,90,'UPC');
        
        barcodeTexto(0.5,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
