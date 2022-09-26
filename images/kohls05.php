<?php                      //      1         2      3       4      5      6      7       8        9  
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','SUBCLASS');
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
        $CLASS = asignar(8,'10');
        $SUB = asignar(9,'13');
        
            // Creacion del formato
        formato(125,163,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',15,20,0,0,$arialBold,$black,10,0,0);
        
        texto($SIZE,15,32,0,0,$arial,$black,8,0,0);
        
        texto($COLORCODE,15,42,0,0,$arial,$black,6.5,0,0);
        texto($COLOR,35,42,0,0,$arial,$black,6.5,0,0);
        
        texto('STYLE',15,55,0,0,$arial,$black,6.5,0,0);
        texto($STYLE,45,55,0,0,$arial,$black,6.5,0,0);
        
        texto('DEPT         CL           SBCL',17,67,0,0,$arial,$black,6,0,0);
        texto($DEPT,0,78,3,70,$arialBold,$black,8,0,0);
        
        texto($CLASS,0,78,1,0,$arialBold,$black,8,0,0);
        
        texto($SUB,0,78,3,-80,$arialBold,$black,8,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6    7 8 9 0 1 2',$UPC),0,120,1,0,$arial,$black,6,0,0);
        
        texto($PRICE,0,155,1,0,$arialBold,$black,9,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,6,80,1,30,'UPC');
        
        barcodeTexto(-1,0,0,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>