<?php                       //  1      2       3     4      5       6      7        8
    $correctos = array('QTY','STYLE','COLOR','UPC','DEPT','SIZE','MSRP','PRICE','SAVINGS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
          // Valores por default para presentar en el formato
        $STYLE = asignar(1,'AS243601MI');
        $COLOR = asignar(2,'PURE BLACK');
        $UPC = asignar(3,'889168138394');
        $DEPT = asignar(4,'043');
        $SIZE = asignar(5,'SMALL');
        $MSRP = asignar(6,'38.00');
        $PRICE = asignar(7,'9.97');
        $savings = asignar(8,'74%');
                       
            // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        //$logo = fuente('NordstromRackLogo.ttf');
        $logo = fuente('n.ttf');
        
        // Introducimos los datos
        
        texto('3',0,16,1,0,$logo,$black,10.5,0,0);
        
        texto($STYLE,12,29,0,0,$arial,$black,6,0,0);
        texto($COLOR,12,39,0,0,$arial,$black,6,0,0);
        
        texto($DEPT,12,94,0,0,$arial,$black,6.5,0,0);
        texto('Dept',12,104,0,0,$arial,$black,6.5,0,0);
        
        texto($SIZE,12,117,0,0,$arial,$black,6.5,0,0);
        texto('COMPARABLE VALUE',12,129,0,0,$arial,$black,6,0,0);
        texto($MSRP,0,129,2,12,$arial,$black,7,0,1);
        texto($savings.' Savings',12,142,0,0,$arial,$black,6.5,0,0);
        texto($PRICE,0,142,2,11,$arial,$black,7,0,1);
        
        // Creacion del Barcode
        barcode($UPC,18,43,1,30,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arialbd.ttf');
        
        require_once('../includes/footer.php');
    }
?>