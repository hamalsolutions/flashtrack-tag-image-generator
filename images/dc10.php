<?php                       //   1       2       3     4       5
    $correctos = array('QTY','COMPANY','COLOR','CLASS','SIZE','PO','STYLE','DESCRIPTION','UPC');
    
   
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COMPANY = asignar(1,'DCS');
        $COLOR = asignar(2,'KVJ0');
        $CLASS = asignar(3,'MA');
        $SIZE = asignar(4,'S');
        $PO = asignar(5,'4500062868');
        $STYLE = asignar(6,'ADYFT00105');
        
        $DESCRIPTION = asignar(7,'RD HIGHLIGHT STACKED CREW');
        
        $UPC = asignar(8,'886959634806');
        
        // Creacion del formato
        formato(400,200,255,255,255);
        setAsSticker(20);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        
        // Introducimos los datos
        
        texto($COMPANY,10,30,0,0,$arial,$black,12,0,0);
        texto($CLASS,0,30,1,0,$arial,$black,12,0,0);
        texto($PO,0,30,2,10,$arial,$black,12,0,0);
        
        imagerectangle($img,4,35,FORMAT_WIDTH-5,36,$black);
        
        texto($STYLE,10,60,0,0,$arial,$black,10,0,0);
        texto($COLOR,0,60,3,70,$arial,$black,10,0,0);
        texto($SIZE,230,60,0,0,$arial,$black,10,0,0);
        
        imagerectangle($img,4,65,FORMAT_WIDTH-5,66,$black);
        
        if(strlen($DESCRIPTION)< 30){
            texto($DESCRIPTION,10,100,0,0,$arial,$black,16,0,0);
        }  else {
            texto($DESCRIPTION,10,100,0,0,$arial,$black,14,0,0);
        }
        
        
        
        // Creacion del Barcode
        barcode($UPC,180,90,1.3,80,'UPC');
        
        barcodeTexto(1,0,-5,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
