<?php                    //    1        2      3      4      5    
    $correctos = array('QTY','COLOR','SIZE','CATEGORY','UPC','PRICE','SEASON','GROUP NAME','KSN','DESCRIPTION','DIV','ITEM#','SKU','LINE','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK COMBO');
        $SIZE = asignar(2,'XL');
        $CATEGORY = asignar(3,'MISSY');
        $UPC = asignar(4,'845550015292');
        $PRICE = asignar(5,'40.00');
        $SEASON = asignar(6,'H3');
        $GROUP = asignar(7,'HAREM PARADISE');
        $KSN = asignar(8,'6217539-3');
        $DESCRIPTION = asignar(9,'VEST');
        $DIV = asignar(10,'D07');
        $ITEM = asignar(11,'M66638');
        $SKU = asignar(12,'032');
        $LINE = asignar(13,'24');
        $CLASS = asignar(14,'602');
                
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        
        // Introducimos los datos
        
        texto($CATEGORY,10,45,0,0,$arial,$black,8,0,0);
        
        texto($GROUP,10,57,0,0,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,10,69,0,0,$arial,$black,7,0,0);
        
        texto($COLOR,10,81,0,0,$arial,$black,7,0,0);
        
        
        texto('KSN# '.$KSN,0,97,1,0,$arial,$black,7,0,0);
        
        
        texto($DIV,20,195,0,0,$arial,$black,7,0,0);
        
        texto($ITEM,20,207,0,0,$arial,$black,7,0,0);
        
        texto($SKU,20,219,0,0,$arial,$black,7,0,0);
        
        
        texto('LINE:',100,195,0,0,$arial,$black,7,0,0);
        texto($LINE,125,195,0,0,$arial,$black,7,0,0);
        
        texto('CLS:',100,207,0,0,$arial,$black,7,0,0);
        texto($CLASS,121,207,0,0,$arial,$black,7,0,0);
        
        texto($SEASON,100,219,0,0,$arial,$black,7,0,0);
        
        
        texto($SIZE,0,235,1,0,$arial,$black,10,0,0);
        
        perforacion();
        
        texto($PRICE,0,280,1,0,$arial,$black,12.5,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,80,1.3,90,'UPC');
        
        barcodeTexto(1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
