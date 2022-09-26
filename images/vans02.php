<?php                    //    1        2       3        4      5          6         7       8
    $correctos = array('QTY','VENDOR','CLASS','COLOR','UPC','STYLE','DESCRIPTION','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $VENDOR = asignar(1,'Vans');
        $CLASS = asignar(2,'80');
        $COLOR = asignar(3,'Black');
        $UPC = asignar(4,'732075507312');
        $STYLE = asignar(5,'VN-0K1MBLK');
        $DESCRIPTION = asignar(6,'BDNP43');
        $SIZE = asignar(7,'8');
        $PRICE = asignar(8,'46.00');
        
        
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $logo = fuente('VANS_Logo.ttf');
       
        // Introducimos los datos
        texto('V',0,42,1,0,$logo,$black,28,0,0);
        
        texto('www.vans.com',0,62,1,0,$arial,$black,9,0,0);
        
        texto('class',0,72,1,0,$arial,$black,9,0,0);
        texto($CLASS,0,82,1,0,$arial,$black,8,0,0);
        
        texto('Vendor',0,92,3,75,$arial,$black,9,0,0);
        texto($VENDOR,0,102,3,75,$arial,$black,8,0,0);
        
        texto('Style',0,92,3,-65,$arial,$black,9,0,0);
        texto($STYLE,0,102,3,-65,$arial,$black,7.5,0,0);
        
        texto('Color',0,115,3,75,$arial,$black,9,0,0);
        texto($COLOR,0,125,3,75,$arial,$black,8,0,0);
        
        texto('Size',0,115,3,-65,$arial,$black,9,0,0);
        texto($SIZE,0,125,3,-65,$arial,$black,8,0,0);
        
        texto($STYLE,0,213,1,0,$arial,$black,9,0,0);
        
        parrafo($DESCRIPTION, 0, 227, 1, 0, $arial, $black, 8, 0, 15, 12);
        
        if (strlen($DESCRIPTION)<=15)
            texto($SIZE,0,243,1,0,$arial,$black,9,0,0);
        else
            texto($SIZE,0,253,1,0,$arial,$black,9,0,0);
        
        imagerectangle($img,4,262,FORMAT_WIDTH-5,263,$black);
        
        texto($PRICE,0,277,1,0,$arial,$black,9,0,1);
        
        texto('SUGG RET PRICE',0,289,1,0,$arial,$black,8,0,0);
        
        imagerectangle($img,4,291,FORMAT_WIDTH-5,292,$black);
        
        // Creacion del Barcode
        barcode($UPC,18,137,1,45,'UPC');
        
        barcodeTexto(4.5,0,2,5,'OCR-B_CND.ttf');
        
        require_once('../includes/footer.php');
    }
?>
