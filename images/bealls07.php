<?php                    //    1        2     3     4       5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','COLOR CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'W1CWARM');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'1421379I');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'30.00');
        $DEPT = asignar(6,'230');
        $COLORCODE = asignar(7,'WT');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        $tahomaBold = fuente('tahomabd.ttf');
        $timesNewRomanBold = fuente('timesbd.ttf');
        
        // Introducimos los datos
        agujero(85, 25);
        
        texto('Beall\'s',60,55,0,0,$timesNewRomanBold,$black,12,0,0);
        
        texto('DEPT# ',0,78,3,75,$arial,$black,10,0,0);
        
        texto($DEPT,90,78,0,0,$arialBold,$black,10,0,0);
        
        texto($STYLE,20,100,0,0,$tahomaBold,$black,11,0,0);
        
        texto('COLOR',20,120,0,0,$arial,$black,10,0,0);
        
        if (strlen($COLOR)<11)
            texto($COLORCODE.'/'.$COLOR,0,120,2,5,$arialNarrowBold,$black,9,0,0);
        else
            texto($COLORCODE.'/'.$COLOR,0,120,2,5,$arialNarrowBold,$black,8,0,0);
        
        imageline($img,0,125,168,125,$black);
        
        texto('SIZE:',20,235,0,0,$arial,$black,9,0,0);
        texto($SIZE,0,235,1,0,$arialBold,$black,10,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arial,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,15,115,1.2,85,'UPC');
        
        barcodeTexto(3,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
