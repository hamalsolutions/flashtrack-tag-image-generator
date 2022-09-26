<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE','COLOR CODE','CLASS','DEPT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MR3714000');
        $COLOR = asignar(2,'CORAL/TAUPE');
        $SIZE = asignar(3,'X-LARGE');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$99.00');
        $COLORCODE = asignar(6,'234');
        $CLASS = asignar(7,'600');
        $DEPT = asignar(8,'1820');
        
            // Creacion del formato
        formato(300,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $timesBold = fuente('timesbd.ttf');
        $ocrA = fuente('OCRAStd.otf');
        $bookman = fuente('bookos.ttf');
        
        // Introducimos los datos
        texto('SIGNATURE|STUDIO',0,60,1,0,$arial,$black,11,0,0);
        
        texto('STYLE',90,98,0,0,$arial,$black,7,0,0);
        texto($STYLE,135,98,0,0,$arial,$black,7,0,0);
        
        texto('SIZE',90,112,0,0,$arial,$black,7,0,0);
        texto($SIZE,135,112,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',90,126,0,0,$arial,$black,7,0,0);
        texto($COLORCODE,135,126,0,0,$arial,$black,7,0,0);
        parrafo($COLOR, 135, 140, 0, 0, $arial, $black, 7, 0, 15, 10);
        
        texto(substr($UPC, 0, 3),90,218,0,0,$arial,$black,7,0,0);
        texto(substr($UPC, 3, 9),0,220,2,90,$ocrA,$black,10,0,0);
        
        texto('DEPT',90,240,0,0,$arial,$black,7,0,0);
        texto($DEPT,0,250,3,100,$arial,$black,7,0,0);
        
        texto('CLASS',0,240,1,0,$arial,$black,7,0,0);
        texto($CLASS,0,250,1,0,$arial,$black,7,0,0);
        
        texto($PRICE,0,280,1,0,$timesBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,70,135,1.2,70,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
