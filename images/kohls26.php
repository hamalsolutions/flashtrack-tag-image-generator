<?php                      //      1         2       3      4       5        6        7      8         9        
    $correctos = array('QTY','COLOR CODE','COLOR','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE','DEPARTMENT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'035');
        $COLOR = asignar(2,'GREY');
        $STYLE = asignar(3,'4TJKM111030G');
        $DEPT = asignar(4,'244');
        $CLASS = asignar(5,'50');
        $SUB = asignar(6,'51');
        $UPC = asignar(7,'885347491236');
        $PRICE = asignar(8,'$24.00');
        $DEPARTMENT = asignar(9,'MENS');
        
            // Creacion del formato
        formato(163,125,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',10,15,0,0,$arialBold,$black,9,0,0);
        texto('Kohls.com',10,25,0,0,$arial,$black,7,0,0);
        
        texto($COLORCODE.' '.$COLOR,0,30,1,0,$arialBold,$black,6.5,0,0);
        
        texto('Style '.$STYLE,0,40,1,0,$arialBold,$black,7,0,0);
        
        texto($DEPT,0,53,3,80,$arialBold,$black,8,0,0);
        
        texto($CLASS,0,53,1,0,$arialBold,$black,8,0,0);
        
        texto($SUB,0,53,3,-80,$arialBold,$black,8,0,0);        
        
        texto(formatizarTexto('1      2  3  4  5  6     7  8  9  0  1      2',$UPC),0,97,1,0,$arial,$black,7,0,0);
        
        texto($DEPARTMENT,0,107,1,0,$arialBold,$black,7,0,0);
        
        texto($PRICE,0,120,1,0,$arialBold,$black,9,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,3,40,1.4,49,'UPC');
        
        barcodeTexto(-1,0,-4,3,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>