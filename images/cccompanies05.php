<?php                     //   1       2      3      4      5      6
    $correctos = array('QTY','DEPT','CLASS','VPN','COLOR','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DEPT = asignar(1,'1203');
        $CLASS = asignar(2,'314');
        $VPN = asignar(3,'31137VF');
        $COLOR = asignar(4,'PINK');
        $UPC = asignar(5,'846932000011');
        $PRICE = asignar(6,'9.98');
        
        // Creacion del formato
        formato(150,150,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');

        // Introducimos los datos
        setAsSticker(15);
        
        texto('DEPT '.$DEPT,10,20,0,0,$arialNarrow,$black,9,0,0);        
        
        texto('CL '.$CLASS,0,20,2,10,$arialNarrow,$black,9,0,0);        

        texto('VPN '.$VPN,0,35,1,0,$arialNarrow,$black,9,0,0);     
        
        texto('Color: ',30,130,0,0,$arialNarrow,$black,8,0,0);  
        texto($COLOR,55,130,0,0,$arialNarrowBold,$black,8,0,0); 
        
        texto($PRICE,0,145,1,0,$arialNarrow,$black,9,0,1); 
        
        // Creacion del Barcode
        barcode($UPC,12,37,1.1,70,'UPC');
        
        barcodeTexto(2,0,-1,4,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
