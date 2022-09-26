<?php                    //    1        2           3       4      5      6       7      8       9      10       11
    $correctos = array('QTY','UPC','DESCRIPTION','PRICE','DEPT','CLASS','ITEM','STYLE','COLOR','SIZE','MADEIN','CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'490331905349');
        $DESCRIPTION = asignar(2,'LION BOY 2 PC SET');
        $PRICE = asignar(3,'20.00');
        $DEPT = asignar(4,'033');
        $CLASS = asignar(5,'19');
        $ITEM = asignar(6,'0534');
        $STYLE = asignar(7,'1323J0320B');
        $COLOR = asignar(8,'RED');
        $SIZE = asignar(9,'6M');
        $MADEIN = asignar(10,'Guatemala');
        $CODE = asignar(11,'HAR11-01A05');
        
            // Creacion del formato
        formato(220,220,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
       
        // Introducimos los datos
        cajaVacia(5,4,100,25,$black);
        texto($SIZE,0,25,3,107,$arialBold,$black,16,0,0);
        
        //imageline($img,2,28,145,28,$black);
        
        cajaVacia(120,4,93,25,$black);
        texto($PRICE,0,25,3,-115,$arialBold,$black,16,0,1);
        
        texto($DEPT,0,43,3,95,$arialBold,$black,9,0,0);
        imageline($img,90,31,90,43,$black);
        texto($CLASS,0,43,1,0,$arialBold,$black,9,0,0);
        imageline($img,130,31,130,43,$black);
        texto($ITEM,0,43,3,-105,$arialBold,$black,9,0,0);
        
        imageline($img,2,46,217,46,$black);
        
        texto($DESCRIPTION,0,57,1,0,$arial,$black,7,0,0);
        texto($COLOR.'/'.$STYLE,0,67,1,0,$arial,$black,7,0,0);
        
        imageline($img,2,70,217,70,$black);
        
        texto('ID181433 '.$CODE.'-0025',10,82,0,0,$arial,$black,7,0,0);
        texto('Distributed by Jerry Leigh of California, Inc.',10,93,0,0,$arial,$black,7,0,0);
        texto('Van Nuys, CA 91402 All Rights Reserved',10,104,0,0,$arial,$black,7,0,0);
        texto('Target and the Bullseye Design are registered',10,115,0,0,$arial,$black,7,0,0);
        texto('trademarks of Target Brands Inc.',10,126,0,0,$arial,$black,7,0,0);
        
        imageline($img,2,130,217,130,$black);
        
        texto('Made in '.$MADEIN,10,141,0,0,$arial,$black,7,0,0);
        
        imageline($img,2,207,217,207,$black);
        
        
        
        // Creacion del Barcode
        barcode($UPC,15,98,1.5,97,'UPC');
        
        barcodeTexto(1,0,-1,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
