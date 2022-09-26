<?php                      //      1         2      3       4      5      6      7       8        9  
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','SUB CLASS');
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
        formato(125,100,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',15,15,0,0,$arialBold,$black,9,0,0);
        
        texto($SIZE,15,25,0,0,$arial,$black,6,0,0);
        
        texto($COLORCODE,15,33,0,0,$arial,$black,5.5,0,0);
        texto($COLOR,35,33,0,0,$arial,$black,5.5,0,0);
        
        texto('STYLE',15,42,0,0,$arial,$black,5,0,0);
        texto($STYLE,45,42,0,0,$arial,$black,6,0,0);
        
        texto('DEPT             CL            SBCL',17,51,0,0,$arial,$black,5,0,0);
        texto($DEPT,0,59,3,70,$arialBold,$black,6.5,0,0);
        
        texto($CLASS,0,59,1,0,$arialBold,$black,6.5,0,0);
        
        texto($SUB,0,59,3,-80,$arialBold,$black,6.5,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6    7 8 9 0 1 2',$UPC),0,87,1,0,$arial,$black,5,0,0);
        
        texto($PRICE,0,97,1,0,$arialBold,$black,8,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,6,60,1,20,'UPC');
        
        barcodeTexto(-1,0,0,3,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>