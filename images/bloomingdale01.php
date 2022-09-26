<?php                       //  1       2      3      4       5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','STORE CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'W87SM');
        $COLOR = asignar(2,'520');
        $SIZE = asignar(3,'2');
        $UPC = asignar(4,'899799002865');
        $STORE = asignar(5,'37');
        
            // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($STYLE,10,25,0,0,$arial,$black,10,0,0);
        
        
        texto($COLOR,0,25,2,20,$arial,$black,10,0,0);
        //textoParrafo($img,10,0,145,31,empty($COLOR)?$m_text_color:$text_color,$arial,1,$COLOR,20);
        
        texto($SIZE,0,60,1,0,$arial,$black,14,0,0);
        
        
        texto($STORE,20,183,0,0,$arial,$black,12,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,18,55,1.3,80,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
