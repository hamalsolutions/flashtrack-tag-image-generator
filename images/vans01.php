<?php                    //    1        2       3        4      5          6         7       8
    $correctos = array('QTY','DEPT','CLASS','SUBCLASS','UPC','STYLE','DESCRIPTION','SIZE','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'155');
        $CLASS = asignar(2,'80');
        $SUBCLASS = asignar(3,'83');
        $UPC = asignar(4,'617931644809');
        $STYLE = asignar(5,'VN-KIML3RM');
        $DESCRIPTION = asignar(6,'Loose Straight White Wash');
        $SIZE = asignar(7,'30x30"');
        $PRICE = asignar(8,'54.00');
        
        
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
        
        texto('DEPT: '.$DEPT,30,82,0,0,$arial,$black,8,0,0);
        
        texto('CLASS: '.$CLASS,30,96,0,0,$arial,$black,8,0,0);
        
        texto('SUB CLASS: '.$SUBCLASS,30,110,0,0,$arial,$black,8,0,0);
        
        texto($STYLE,0,197,1,0,$arial,$black,8,0,0);
        
        parrafo($DESCRIPTION, 0, 209, 1, 0, $arial, $black, 8, 0, 15, 12);
        
        texto($SIZE,0,233,1,0,$arial,$black,8,0,0);
        
        texto($PRICE,0,273,1,0,$arial,$black,8,0,1);
        
        imagerectangle($img,4,257,FORMAT_WIDTH-5,258,$black);
        
        texto('SUGG RET PRICE',0,287,1,0,$arial,$black,8,0,0);
        
        imagerectangle($img,4,291,FORMAT_WIDTH-5,292,$black);
        
        // Creacion del Barcode
        barcode($UPC,18,115,1,55,'UPC');
        
        barcodeTexto(4.5,0,2,5,'OCR-B_CND.ttf');
        
        require_once('../includes/footer.php');
    }
?>
