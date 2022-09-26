<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE', 'PRICE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MA424523S7SS');
        $COLOR = asignar(2,'PHPT');
        $SIZE = asignar(3,'XS');
        $PRICE = asignar(4,'$110.00');
        $UPC = asignar(5,'190172469412');

                
            // Creacion del formato
        formato(200,200,255,255,255);

        setAsSticker(15);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');

        
            // Introducimos los datos

        
        texto('STYLE',10,28,0,0,$arial,$black,10,0,0);
        texto($STYLE,68,28,0,0,$arial,$black,10,0,0);
        
        texto('COLOR',10,48,0,0,$arial,$black,10,0,0);

        texto($COLOR,68,48,0,0,$arial,$black,10,0,0);
        //parrafo($COLOR,73,35,0,0,$arial,$black,10,0,15,12);
        
        texto('SIZE',10,68,0,0,$arial,$black,10,0,0);
        texto($SIZE,68,68,0,0,$arial,$black,10,0,0);

        texto('MSRP',10,88,0,0,$arial,$black,10,0,0);
        texto($PRICE,68,88,0,0,$arial,$black,10,0,0);


         // Creacion del Barcode
        barcode($UPC,20,85,1.3,78,'UPC');
        texto(formatizarTexto('1  23456   14545  1',$UPC),0,180,1,0,$arial,$black,10,0,0);
        //barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
