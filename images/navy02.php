<?php                      //   1      2       3      4     5       6
    $correctos = array('QTY','COLOR','SIZE','STYLE','STYLE#','UPC','DEPT','PRICE','CLASS','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'2096STRP');
        $STYLEN = asignar(4,'4667277');
        $UPC = asignar(5,'619720171596');
        $DEPT = asignar(6,'173');
        $PRICE = asignar(7,'14.99');
        $CLASS = asignar(8,'1301');
        $SEASON = asignar(9,'F08');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('NAVY EXCHANGE',0,60,1,0,$arial,$black,10,0,0);
        
        texto('Dept',20,90,0,0,$arial,$black,8,0,0);
        texto($DEPT,20,105,0,0,$arial,$black,8,0,0);
        
        texto('Class',0,90,1,0,$arial,$black,8,0,0);
        texto($CLASS,0,105,1,0,$arial,$black,8,0,0);
        
        texto('Season',120,90,0,0,$arial,$black,8,0,0);
        texto($SEASON,0,105,2,15,$arial,$black,8,0,0);
        
        texto('Vendor Style',20,130,0,0,$arial,$black,8,0,0);
        texto($STYLE,20,140,0,0,$arial,$black,8,0,0);
        
        texto('Style No',115,130,0,0,$arial,$black,8,0,0);
        texto($STYLEN,0,140,2,15,$arial,$black,8,0,0);
        
        texto('Size',20,160,0,0,$arial,$black,8,0,0);
        texto($SIZE,20,170,0,0,$arial,$black,8,0,0);
        
        texto('Color',115,160,0,0,$arial,$black,8,0,0);
        texto($COLOR,0,170,2,15,$arial,$black,8,0,0);
        
        
        texto(formatizarTexto('0         12345       67890        1',$UPC),0,230,1,0,$arial,$black,8,0,0);
        
        
        
        
        
        texto($PRICE,0,257,1,0,$arialBold,$black,12,0,1);
        
        
        // Creacion del Barcode
        barcode($UPC,13,148,1.2,75,'UPC');
        
        barcodeTexto(-1,0,0,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
