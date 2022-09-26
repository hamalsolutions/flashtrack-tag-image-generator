<?php                     //    1       2      3     4       5         6            7          8
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','SEASON','FINELINE','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'RAZ39106');
        $COLOR = asignar(2,'TEMCLR');
        $SIZE = asignar(3,'S-XL');
        $UPC = asignar(4,'023481391061');
        $SEASON = asignar(5,'00-00');
        $FINELINE = asignar(6,'41-00-6563');
        $DESCRIPTION = asignar(7,'NCAA TEAM TEE');
        $PRICE = asignar(8,'11.48');

            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        //$darkBlue = color(25, 69, 178);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
        agujero(75, 25);
                        
        cajaVacia(6, 62, 137, 31, $black);
        texto('SIZE',10,72,0,0,$arial,$black,6,0,0);
        
            // Introducimos los datos
        texto('1',15,60,0,0,$logo,$black,35,0,0);
        
        texto('2',104,60,0,0,$logo,$black,35,0,0);

        texto($SIZE,0,85,1,0,$arialBold,$black,12,0,0);

        texto($DESCRIPTION,0,107,1,0,$arial,$black,7.5,0,0);

        texto($FINELINE,10,120,0,0,$arial,$black,7.5,0,0);

        texto($COLOR, 0, 120, 2, 10, $arial, $black, strlen($COLOR) > 15 ? 6 : 7, 0, 0);
        
        texto($SEASON,10,132,0,0,$arial,$black,7,0,0);
        
        texto($STYLE,0,132,2,10,$arial,$black,7,0,0);
        
        texto('Distributed by Wal-Mart Stores, Inc.',0,214,1,0,$arial,$black,6,0,0);
        texto('Bentonville, AR 72716',0,222,1,0,$arial,$black,6,0,0);
        texto('walmart.com',0,232,1,0,$arial,$black,6.5,0,0);
        
        perforacion(150, 275, 237);
        
        //texto('-- - - - - - - - - - - - - - - - --',0,237,1,0,$arial,$black,10,0,0);
        
        texto($PRICE,0,265,1,0,$arial,$black,16.5,0,1);

        // Creacion del Barcode
        barcode($UPC,11,128,1.1,58,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>