<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','STYLE','SEASON','COLOR','SIZE','UPC','PRICE','FINELINE','DESCRIPTION','DEPT','SUB');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'GTSKBXSICY');
        $SEASON = asignar(2,'00-12');
        $COLOR = asignar(3,'TURQUOISE');
        $SIZE = asignar(4,'L/G (10/12)');
        $UPC = asignar(5,'716068367923');
        $PRICE = asignar(6,'6.97');
        $FINELINE = asignar(7,'4704');
        $DESCRIPTION = asignar(8,'SKYLANDERS MONTER');
        $DEPT = asignar(9,'24');
        $SUB= asignar(10,'00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $darkBlue = color(25, 69, 178);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
        agujero(75, 25);
                        
        cajaVacia(6, 62, 137, 31, $darkBlue);
        texto('SIZE',10,72,0,0,$arial,$darkBlue,6,0,0);
        
            // Introducimos los datos
        
        texto('1',15,60,0,0,$logo,$darkBlue,35,0,0);
        
        texto('2',104,60,0,0,$logo,$darkBlue,35,0,0);
        
        
        texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);
        
        texto($DESCRIPTION,0,107,1,0,$arial,$black,7.5,0,0);
        
        texto($FINELINE,texto($SUB,texto($DEPT,10,120,0,0,$arial,$black,7,0,0)-8,120,0,0,$arial,$black,7,0,0)-8,120,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,0,120,2,10,$arial,$black,strlen($COLOR)>15?6:7,0,0);
        
        texto($SEASON,10,132,0,0,$arial,$black,7,0,0);
        
        texto($STYLE,0,132,2,10,$arial,$black,7,0,0);
        
        texto('Distributed by Wal-Mart Stores, Inc.',0,212,1,0,$arial,$black,6,0,0);
        texto('Bentonville, AR 72716',0,219,1,0,$arial,$black,6,0,0);
        texto('walmart.com',0,226,1,0,$arial,$black,6,0,0);
        
        perforacion(150, 275, 237);
        
        //texto('-- - - - - - - - - - - - - - - - --',0,237,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,265,1,0,$arial,$black,16.5,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,125,1.1,60,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>