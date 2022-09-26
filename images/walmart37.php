<?php                     //    1        2        3        4       5      6      7      8    
    $correctos = array('QTY','SEASON','DEPT','FINELINE','STYLE','COLOR','UPC','SIZE','PRICE');
  
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $SEASON = asignar(1, '0417');
        $DEPT = asignar(2, '023');
        $FINELINE = asignar(3, '00 F/L 4722');
        $STYLE = asignar(4, 'MJN1163');
        $COLOR = asignar(5, 'BLACK/WHITE CHLORINE WASH');
        $UPC = asignar(6, '190371626432');
        $SIZE = asignar(7, 'S (34/36)');
        $PRICE = asignar(8, '4.99');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        agujero(75, 25);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $white = color(255, 255, 255);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
               // Fuentes a usar
        $futuraMB = fuente('futuram.TTF');
        $futuraLC = fuente('futuralc.ttf');
        $futuraLB = fuente('futural.ttf');
        $arial = fuente('arial.ttf');
        $arialB = fuente('arialbd.ttf');

        // Introducimos los datos
        cajaRellena(5, 40, 138, 32, $white, $black, 0);

        $SIZE = str_replace(chr(160),"",$SIZE);
        $SIZE = str_replace(chr(194),"",$SIZE);
        $SIZE = str_replace(chr(226).chr(128).chr(147),"-",$SIZE);
        $SIZE = str_replace(" ","",$SIZE);
        $SIZE = str_replace("-"," - ",$SIZE);

        texto('SIZE', 10, 50, 0, 0, $arial, $black, 5, 0, 0);
        texto($SIZE, 40, 64, 0, 0, $futuraMB, $black, 16, 0, 0);

        if (strlen($COLOR) > 14) {
            texto($FINELINE, 8, 90, 0, 0, $futuraLC, $black, 7, 0, 0);
            texto($COLOR, 0, 90, 2, 8, $futuraLC, $black, 7, 0, 0);
        } else {
            texto($FINELINE, 10, 90, 0, 0, $futuraLB, $black, 7, 0, 0);
            texto($COLOR, 0, 90, 2, 8, $futuraLB, $black, 7, 0, 0);
        }

        if (strlen($STYLE) > 20) {
            texto($SEASON, 10, 110, 0, 0, $futuraLC, $black, 7, 0, 0);
            texto($STYLE, 0, 110, 2, 6, $futuraLC, $black, 7, 0, 0);
        } else {
            texto($SEASON, 10, 110, 0, 0, $futuraLB, $black, 7, 0, 0);
            texto($STYLE, 0, 110, 2, 6, $futuraLB, $black, 7, 0, 0);
        }

        texto($DEPT, 0, 125, 2, 20, $futuraLB, $black, 7, 0, 0);

        texto($PRICE, 0, 255, 1, 0, $arial, $black, 20, 0, 1);

        // Creacion del Barcode
        barcode($UPC,11,120,1.1,88,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>