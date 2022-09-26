<?php                      //   1       2       3     4      5
    $correctos = array('QTY', 'DEPT', 'STYLE', 'COLOR', 'SIZE', 'UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'833');
        $STYLE = asignar(2,'MN66762840');
        $COLOR = asignar(3,'BLACK');
        $SIZE = asignar(5,'SMALL');
        $UPC = asignar(6,'190172514563');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arialNB = fuente('arialnb.ttf');
        
        // Introducimos los datos

        agujero(85,25);

        texto('DEPT',15,60,0,0,$arialNB,$black,9,0,0);
        texto($DEPT,65,60,0,0,$arialNB,$black,9,0,0);

        texto('STYLE',15,80,0,0,$arialNB,$black,8,0,0);
        texto($STYLE,65,80,0,0,$arialNB,$black,8,0,0);
        
        texto('COLOR',15,100,0,0,$arialNB,$black,8,0,0);
        texto($COLOR,65,100,0,0,$arialNB,$black,8,0,0);
        
        texto('SIZE',15,120,0,0,$arialNB,$black,8,0,0);
        texto($SIZE,65,120,0,0,$arialNB,$black,8,0,0);
        

        // Creacion del Barcode
        barcode($UPC,25,140,1,60,'UPC');
        
        barcodeTexto(3,-1,2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
