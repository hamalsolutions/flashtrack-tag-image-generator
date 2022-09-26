<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','DEPT','SEASON','COLOR','SIZE','STYLE','UPC','PRICE','FINELINE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'023');
        $SEASON = asignar(2,'0409');
        $COLOR = asignar(3,'WHITE');
        $SIZE = asignar(4,'2XL/2XG - 50/52');
        $STYLE = asignar(5,'MJN1163');
        $UPC = asignar(6,'716068367923');
        $PRICE = asignar(7,'9.00');
        $FINELINE = asignar(8,'9301');
        $DESCRIPTION = asignar(9,'A BEER');
        //$DESCRIPTION = asignar(9,'ALWAYS SUNNY 2 PACK BUNDLE ADT');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        agujero(75,50);
            // Colores a usar
        $black = color(0, 0, 0);
        $blue = color(0, 0, 255);
        $yellow = color(255, 187, 119);
        $gray = color(138, 138, 138);
        $transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arial70 = fuente('Arial_70_Bold.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
            // Introducimos los datos
        
        texto('1',15,40,0,0,$logo,$blue,35,0,0);
        
        texto('2',104,40,0,0,$logo,$yellow,35,0,0);
        
        //imagefilledellipse($img,75,50,12,12,$transparent);
        //imageellipse($img,75,50,12,12,$gray);
        
        texto($SEASON,10,60,0,0,$arial,$black,8,0,0);
        
        texto($STYLE,10,74,0,0,$arialNarrow,$black,strlen($STYLE)>10?7.5:8.5,0,0);
        
        texto($DEPT,0,60,2,10,$arial,$black,8,0,0);
        
        texto($COLOR,0,74,2,8,$arialNarrow,$black,strlen($COLOR)>10?6.5:7.5,0,0);
        
        if (strlen($DESCRIPTION) >20) {
            texto($DESCRIPTION,0,98,1,0,$arial70,$black,8,0,0);
        } else {
            texto($DESCRIPTION,0,98,1,0,$arialNarrow,$black,8.5,0,0);
        }

            $SIZE = str_replace(chr(160),"",$SIZE);
            $SIZE = str_replace(chr(194),"",$SIZE);
            $SIZE = str_replace(chr(226).chr(128).chr(147),"-",$SIZE);
            $SIZE = str_replace(" ","",$SIZE);
            //$SIZE = str_replace("-"," - ",$SIZE);
        texto($SIZE,0,115,1,0,$arialBold,$black,10,0,0);
        
        texto('00 F/L '.$FINELINE,0,132,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,265,1,0,$arial,$black,19,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,132,1.1,88,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>