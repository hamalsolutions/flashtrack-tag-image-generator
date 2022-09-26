<?php                     //     1            2     3     4       5       6       7     8     9       10          
    $correctos = array('QTY','DESCRIPTION','ITEM','SKU','LINE','CLASS','SEASON','UPC','KSN','SIZE','PRICE','DIV','MADEIN','CATEGORY');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'AMPLIFY GRAPHIC TEES');
        $ITEM = asignar(2,'86249');
        $SKU = asignar(3,'2');
        $LINE = asignar(4,'6');
        $CLASS = asignar(5,'6');
        $SEASON = asignar(6,'C4');
        $UPC = asignar(7,'887117850038');
        $KSN = asignar(8,'07218072-2');
        $SIZE = asignar(9,'S');
        $PRICE = asignar(10,'20.00');
        $DIV = asignar(11,'D09');
        $MADEIN = asignar(12,'MADE IN MEXICO');
        $CATEGORY = asignar(13,'YOUNG MENS');
        
            // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $logoSears = fuente('Sears_Logo_2011.ttf');
        
        // Introducimos los campos de datos en el formato
        texto('Sears',10,18,0,0,$logoSears,$black,10,0,0);
        texto('sears.com',10,28,0,0,$arial,$black,7,0,0);
        
        texto($DESCRIPTION,70,40,0,0,$arialNarrow,$black,7,0,0);
        texto('Line: '.$LINE,0,40,2,10,$arialNarrow,$black,7,0,0);
        
        texto('KSN#: '.$KSN,70,60,0,0,$arialNarrow,$black,7,0,0);
        texto('CLS: '.$CLASS,0,60,2,10,$arialNarrow,$black,7,0,0);
        texto($CATEGORY,10,60,0,0,$arialNarrow,$black,7,0,0);       
        
        texto($DIV,70,75,0,0,$arialNarrow,$black,7,0,0);
        texto('M'.$ITEM,105,75,0,0,$arialNarrow,$black,7,0,0);
        $SKU = str_pad($SKU, 3, '0', STR_PAD_LEFT);
        texto($SKU,150,75,0,0,$arialNarrow,$black,7,0,0);
        texto($SEASON,175,75,0,0,$arialNarrow,$black,7,0,0);
        
        texto(formatizarTexto('1         23456    12345         1',$UPC),75,130,0,0,$arial,$black,7,0,0);
        
        texto($SIZE,10,85,0,0,$arialNarrow,$black,11,0,0);
        texto($MADEIN,10,105,0,0,$arialNarrow,$black,6,0,0);
        texto($PRICE,10,125,0,0,$arialNarrow,$black,12,0,1);
       
        // Creacion del Barcode
        barcode($UPC,75,94,1,30,'UPC');
        
        barcodeTexto(-1,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
