<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'JMKS-3189');
        $COLOR = asignar(2,'CELESTIAL BLUE');
        $SIZE = asignar(3,'M');
        $UPC = asignar(4,'884616098831');
        $DESCRIPTION = asignar(5,'DRAPERY');
                
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($DESCRIPTION,10,27,0,0,$arial,$black,10,0,0);
        
        texto('STYLE#',10,47,0,0,$arial,$black,10,0,0);
        texto($STYLE,73,47,0,0,$arial,$black,10,0,0);
        
        texto('COLOR:',10,67,0,0,$arial,$black,10,0,0);
        parrafo($COLOR,73,67,0,0,$arial,$black,10,0,15,12);
        
        texto('SIZE:',10,95,0,0,$arial,$black,10,0,0);
        texto($SIZE,73,95,0,0,$arial,$black,10,0,0);
        
         // Creacion del Barcode
        barcode($UPC,20,82,1.3,87,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
