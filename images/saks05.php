<?php                      //   1       2       3     4  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WBT803BLS');
        $COLOR = asignar(2,'BLUSH');
        $SIZE = asignar(3,'SM');
        $UPC = asignar(4,'400012290619');
                
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        
        // Introducimos los datos
        texto($STYLE,0,70,1,0,$arial,$black,10,0,0);
        
        parrafo($COLOR, 0, 93, 1, 0, $arial, $black, 10, 0, 15, 12);
        
        texto($SIZE,0,120,1,0,$arialBold,$black,16,0,0);
        
        // Creacion del Barcode
        barcode($UPC,15,115,1.2,75,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
