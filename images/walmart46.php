<?php                     //    1      2        3      4       5      6      7        8           9
    $correctos = array('QTY','DEPT','COLOR','SIZE','STYLE','UPC','PRICE','FINELINE','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'024');
        $COLOR = asignar(2,'NEOGRN');
        $SIZE = asignar(3,'XS (4/5)');
        $STYLE = asignar(4,'AG16030');
        $UPC = asignar(5,'716068367923');
        $PRICE = asignar(6,'6.97');
        $FINELINE = asignar(7,'8000');
        $DESCRIPTION = asignar(8,'LINEDINO');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0, 0, 0);
        $blue = color(0, 0, 255);
        $yellow = color(255, 187, 119);
        
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logo = fuente('Walmart_2010_Logo.ttf');
        
            // Introducimos los datos
        
        texto('1',15,40,0,0,$logo,$blue,35,0,0);
        
        texto('2',104,40,0,0,$logo,$yellow,35,0,0);
        
        agujero(75, 50);
        
        texto($STYLE,10,74,0,0,$arialNarrow,$black,strlen($STYLE)>10?7.5:8.5,0,0);
        
        texto($DEPT,0,60,2,10,$arial,$black,8,0,0);
        
        texto($COLOR,0,74,2,8,$arialNarrow,$black,strlen($COLOR)>10?6.5:7.5,0,0);
        
        texto($DESCRIPTION,0,98,1,0,$arialNarrow,$black,strlen($DESCRIPTION)>10?7.5:8.5,0,0);
        
            $SIZE = str_replace(chr(160),"",$SIZE);
            $SIZE = str_replace(chr(194),"",$SIZE);
            $SIZE = str_replace(chr(226).chr(128).chr(147),"-",$SIZE);
            $SIZE = str_replace(" ","",$SIZE);
            $SIZE = str_replace("-"," - ",$SIZE);
        texto($SIZE,0,115,1,0,$arialBold,$black,11,0,0);
        
        texto($FINELINE,0,132,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,265,1,0,$arial,$black,19,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,11,132,1.1,88,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>