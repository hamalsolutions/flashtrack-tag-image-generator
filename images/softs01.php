<?php                    //    1        2         3      4       5
    $correctos = array('QTY','UPC','DESCRIPTION','PO','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $UPC = asignar(1,'2438590901');
        $DESCRIPTION = asignar(2,'RENAISSANCE TOP');
        $PO = asignar(3,'7660226');
        $COLOR = asignar(4,'MULTI');
        $SIZE = asignar(5,'XLARGE MISSY');
        
            // Creacion del formato
        formato(200,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
       
        // Introducimos los datos
        texto('Soft Surroundings',10,15,0,0,$arial,$black,8,0,0);
        
        texto('PO#',125,15,0,0,$arial,$black,8,0,0);
        
        texto($PO,0,15,2,5,$arial,$black,8,0,0);
        
        texto($UPC,10,30,0,0,$arial,$black,10,0,0);
        
        texto($DESCRIPTION.' '.$COLOR.' '.$SIZE,0,90,1,0,$arialNarrow,$black,8,0,0);
        
        // Creacion del Barcode
        barcode($UPC,14,21,1.7,53,'128');
        
        require_once('../includes/footer.php');
    }
?>
