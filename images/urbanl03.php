<?php                     //      1          2      3        4          5         6        7      8   
    $correctos = array('QTY','DESCRIPTION','DEPT','CLASS','SUBCLASS','SEASON','DATE CODE','SKU','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Men U L Lion Wing Wht Tee');
        $DEPT = asignar(2,'04');
        $CLASS = asignar(3,'13');
        $SUBCLASS = asignar(4,'03');
        $SEASON = asignar(5,'27');
        $DATE = asignar(6,'F0');
        $SKU = asignar(7,'0403114');
        $PRICE = asignar(8,'7.00');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $ocrB_SB = fuente('OCR-B_SB.ttf');
        
        // Introducimos los datos
        
        texto('DEP   CLS    SUB   S',12,45,0,0,$arialBold,$black,9.5,0,0);
        texto($DEPT,0,65,3,102,$arial,$black,9,0,0);
        texto($CLASS,0,65,3,27,$arial,$black,9,0,0);
        texto($SUBCLASS,0,65,3,-50,$arial,$black,9,0,0);
        texto($SEASON,0,65,3,-113,$arial,$black,9,0,0);
        
        parrafo($DESCRIPTION,8,95,0,0,$arial,$black,8,0,25,10);
        
        texto('DTE',115,140,0,0,$arial,$black,11,0,0);
        
        texto($DATE,0,158,3,-110,$arial,$black,11,0,0);
        
        cajaVacia(5,126,100,25,$black);
        texto($SKU,0,147,3,40,$arialBold,$black,11,0,0);
        
        texto($SKU,0,217,1,0,$ocrB_SB,$black,8,0,0);
        
        texto($PRICE,0,262,1,0,$arial,$black,27,0,1);
        
        
        // Creacion del Barcode
        barcode($SKU,7,165,1,40,'MSI');
        
        require_once('../includes/footer.php');
    }
?>