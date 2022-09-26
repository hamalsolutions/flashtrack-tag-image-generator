<?php                      //      1         2      3       4      5      6      7               8               9        10
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','UPC','RETAIL PRICE','DEPT','DEPT/SIZE DESCRIPTION','CLASS','SUB CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'031');
        $COLOR = asignar(2,'HEATHER GREY');
        $SIZE = asignar(3,'XL');
        $STYLE = asignar(4,'1WRD398R');
        $UPC = asignar(5,'885347090125');
        $PRICE = asignar(6,'18.00');
        $DEPT = asignar(7,'59');
        $DESCRIPTION = asignar(8,'MENS');
        $CLASS = asignar(9,'10');
        $SUB = asignar(10,'13');
        
            // Creacion del formato
        formato(175,150,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',35,20,0,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,35,32,0,0,$arial,$black,8,0,0);
        
        texto($COLORCODE,35,42,0,0,$arial,$black,6.5,0,0);
        texto($COLOR,55,42,0,0,$arial,$black,6.5,0,0);
        
        texto('STYLE',35,55,0,0,$arial,$black,6.5,0,0);
        texto($STYLE,70,55,0,0,$arial,$black,6.5,0,0);
        
        texto('DEPT         CL           SBCL',40,67,0,0,$arial,$black,6,0,0);
        texto($DEPT,0,78,3,70,$arialBold,$black,8,0,0);
        
        texto($CLASS,0,78,1,0,$arialBold,$black,8,0,0);
        
        texto($SUB,0,78,3,-80,$arialBold,$black,8,0,0);
        
        texto($DESCRIPTION,0,132,1,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,145,1,0,$arialBold,$black,9,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,6,58,1.4,55,'UPC');
        
        barcodeTexto(0,0,0,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>