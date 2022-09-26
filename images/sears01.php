<?php                      //   1      2      3        4          5      6      7       8      9     10      11         12       13     14        15
    $correctos = array('QTY','COLOR','PCS','SIZE','DESCRIPTION','UPC','PRICE','DEPT','CLASS','DIV','ITEM#','SEASON','SIZECODE','LINE','DEPT#','KSN ITEM#');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $PCS = asignar(2,'1 PC');
        $SIZE = asignar(3,'M(5/6)');
        $DESCRIPTION = asignar(4,'S/S TEES');
        $UPC = asignar(5,'726392385005');
        $PRICE = asignar(6,'46.00');
        $DEPT_NAME = asignar(7,'MEN\'S');
        $CLASS = asignar(8,'084');
        $DIV = asignar(9,'43');
        $ITEM = asignar(10,'4568');
        $SEASON = asignar(11,'C6');
        $SIZECODE = asignar(12,'003');
        $LINE = asignar(13,'01');
        $DEPT_NUM = asignar(14,'41');
        $KSN = asignar(15,'80300-2');
        
        // Creacion del formato
        formato(350,125,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('SearsLogo.ttf');
        
        // Introducimos el logo y header
        
        //imagefilledellipse($img,325,60,15,15,$transparent);
        imageellipse($img,325,60,15,15,$gray);
        
        texto('STC',10,30,0,0,$arial,$black,6,270,0);
        
        texto('A',75,50,0,0,$logo,$black,10,270,0);
        
        texto('www.sears.com',65,55,0,0,$arial,$black,5,270,0);
        
        
        texto($DEPT_NAME,10,67,0,0,$arialBold,$black,10,270,0);
        
        texto($DESCRIPTION,10,80,0,0,$arial,$black,8,270,0);
        
        texto($COLOR,10,102,0,0,$arial,$black,8.5,270,0);
        
        texto($PCS,10,112,0,0,$arial,$black,8,270,0);
        
        texto($SEASON,10,123,0,0,$arial,$black,8,270,0);
        
        texto($KSN,10,142,0,0,$arial,$black,8,270,0);
        
        texto($ITEM,10,156,0,0,$arial,$black,8,270,0);
        
        texto($DEPT_NUM,10,170,0,0,$arial,$black,8,270,0);
        
        texto('DIV',10,182,0,0,$arial,$black,8,270,0);
        
        texto($DIV,30,182,0,0,$arial,$black,8,270,0);
        
        texto($SIZECODE,10,194,0,0,$arial,$black,8,270,0);
        
        texto('LINE',10,205,0,0,$arial,$black,8,270,0);
        
        texto($LINE,35,205,0,0,$arial,$black,8,270,0);
        
        texto('CLS',10,217,0,0,$arial,$black,8,270,0);
        
        texto($CLASS,35,217,0,0,$arial,$black,8,270,0);
        
        texto($SIZE,0,253,3,50,$arial,$black,14,270,0);
        
        texto($DEPT_NAME,0,280,1,0,$arialBold,$black,12,270,0); 
        
        
        texto('-- - - - - - - - - - - - - --',0,310,1,0,$arial,$black,9,270,0);
        
        texto($PRICE,0,335,1,0,$arialBold,$black,14,270,1);
        
        
         // Creacion del Barcode
        barcode($UPC,70,250,1,35,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
