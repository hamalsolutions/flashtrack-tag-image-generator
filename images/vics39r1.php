<?php                     //   1       2       3      4     5       6
    $correctos = array('QTY','STYLE','COLOR','UPC','SIZE','PRICE','DEPT','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
           // Valores por default para presentar en el formato
        $STYLE = asignar(1,'DLB015381');
        $COLOR = asignar(2,'BLACK');
        $UPC = asignar(3,'885347132467');
        $SIZE = asignar(4,'S');
        $PRICE = asignar(5,'$50.00');
        $DEPT = asignar(6,'362');               
        $GROUPNAME = asignar(7,'NEW DAY DREAMING');               
            // Creacion del formato
        formato(150,325,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        agujero(75, 25);
        
        texto($STYLE,9,60,0,0,$arialNarrow,$black,7,0,0);
        
        texto($COLOR,0,60,2,5,$arialNarrow,$black,7,0,0);
        
        texto('Dept: '.$DEPT,0,80,1,0,$arial,$black,9,0,0);
        
        cajaRellena(1,163,147,25,$vicsColor,$vicsColor);
        
        texto('SIZE:',40,182,0,0,$arial,$black,8,0,0);
        texto($SIZE,65,185,0,0,$arialBold,$black,18,0,0);
        texto($GROUPNAME,0,207,1,0,$arialBold,$black,8,0,0);
        
        perforacion(150, 325, 290);
        
        if ($PRICE) {
            texto($PRICE,0,315,1,0,$arialBold,$black,12,0,1);
        }
        
        
         // Creacion del Barcode
        barcode($UPC,10,80,1.1,68,'UPC');
        
        barcodeTexto(3,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
