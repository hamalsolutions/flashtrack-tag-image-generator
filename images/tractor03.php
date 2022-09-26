<?php                    //    1        2          3       4      5      6       7      8      9        10      11    
    $correctos = array('QTY','UPC','DESCRIPTION','STYLE','COLOR','EAN','SIZE','GRID','COO','COO-CITY','VENDOR','PO');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $UPC = asignar(1,'785266144292');
        $DESCRIPTION = asignar(2,'ARCH PAD 3 PIECE #04');
        $STYLE = asignar(3,'218333');
        $COLOR = asignar(4,'BLACK');        
        $EAN13 = asignar(5,'9008514697472');
        $SIZE = asignar(6,'1SZ');
        $GRID = asignar(7,'0011SZ');
        $COO = asignar(8,'VN');
        $COOCITY = asignar(9,'Ho Chi Minh');
        $VENDOR = asignar(10,'11182');
        $PO = asignar(11,'719209');
        
        // Creacion del formato
        formato(300,200,255,255,255);
        setAsSticker(10);
        
        // Colores
        $black = color(0,0,0);
        
        // Fuentes
        $arial = fuente('arial.ttf');
        $times = fuente('times.ttf');
        
        // Introducimos los datos
        
        texto($DESCRIPTION,0,30,1,0,$times,$black,14,0,0);
        
        texto($COLOR.' '.$SIZE,0,60,1,0,$times,$black,14,0,0);
        
        texto($STYLE.' '.$GRID,0,90,1,0,$times,$black,14,0,0);
        
        texto($VENDOR.' / '.$PO,10,190,0,0,$arial,$black,8.5,0,0);
        
        texto($COO.' - '.$COOCITY,200,190,0,0,$arial,$black,8.5,0,0);
        
        // Generamos los barcodes
        
        //------------- # 1 --------------
        $totaly = 160;
        $bartop = 115;
        $barbottom = 0;
        $barleft = 20;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 3;
        $textTop = 5;
        $numbersFont = 'arial.ttf';
        
        require("php-barcode2.php");
           barcode_print($UPC,'UPC',1,'png');
           
        //------------- # 2 --------------
        $totaly = 160;
        $bartop = 115;
        $barbottom = 0;
        $barleft = 160;
        $barrigth = 2;
        $ancho = 0.2;
        $dientes = 7;
        // Si se requiere introducir texto
        $withText= TRUE;
        $textSize = 1;
        $textLeft = 3;
        $textTop = 5;
        $numbersFont = 'arial.ttf';
        
        barcode_print($EAN13,'EAN',1,'png');
        
        require_once('../includes/footer2.php');
    }
?>
