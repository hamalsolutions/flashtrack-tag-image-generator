<?php                      //   1      2       3       4       5      6      7       8
    $correctos = array('QTY','COLOR CODE','COLOR NAME','SIZE','STYLE','UPC','CLASS','DEPT','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'DFD');
        $COLORNAME = asignar(2,'SPUN SUGAR');
        $SIZE = asignar(3,'XL');
        $STYLE = asignar(4,'70986041');
        $UPC = asignar(5,'885347077119');
        $CLASS = asignar(6,'305');
        $DEPT = asignar(7,'225');
        $PRICE = asignar(8,'18.00');
                
        // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
       
        
        // Introducimos los datos
        
        texto('DEPT#',18,70,0,0,$arial,$black,7,0,0);
        texto($DEPT,23,85,0,0,$arial,$black,7,0,0);
        
        texto('CLASS',0,70,2,15,$arial,$black,7,0,0);
        texto($CLASS,0,85,2,25,$arial,$black,7,0,0);

        texto($STYLE,18,100,0,0,$arial,$black,7,0,0);
        
        
      
        texto($COLORCODE.'/'.$COLORNAME,100,100,2,18,$arialNarrow,$black,7,0,0);
        
        texto('SIZE',15,190,0,0,$arialBold,$black,7,0,0);
        texto($SIZE,47,200,0,0,$arialBold,$black,11,0,0);
        
        perforacion();
        
        texto($PRICE,0,285,1,0,$arialBold,$black,17,0,1);
        
        
          // Creacion del Barcode
        barcode($UPC,14,90,1.2,70,'UPC');
        
        barcodeTexto(2,0,0,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
