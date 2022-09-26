<?php                       //   1       2          3      4        5      6
    $correctos = array('QTY','STYLE','UPC','PRICE','COLOR','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'7081101-429');
        
        $UPC = asignar(2,'786096045933');
        $PRICE = asignar(3,'50.00');
        $COLOR = asignar(4,'US NAVY');
        $SIZE = asignar(5,'M');

        // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $arialNarrow = fuente('arialn.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');

        // Introducimos los datos
        texto($STYLE,10,22,0,0,$arialNarrow,$black,8,0,0);        

        texto($COLOR,0,22,2,5,$arialNarrow,$black,8,0,0);        

        if ($SIZE=='0')
            $SIZE = ' '.$SIZE;
        
        texto($SIZE,15,140,0,0,$arialBold,$black,14,0,0);                 
    
        //texto($PRICE,0,140,2,5,$arialBold,$black,13,0,1);         
        
        $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        //if ($PRICE=='6'||$PRICE=='8'||$PRICE=='10'||$PRICE=='12'||$PRICE=='15'||$PRICE=='20'||$PRICE=='25'||$PRICE=='30'){
            cajaRellena(54,120,38,22,$red,$red);
            $start = texto($PRICE,0,140,1,0,$arialBold,$white,13,0,0);
            texto('$',$start-7,135,0,0,$arial,$white,9,0,0);
        //}
    
        // Creacion del Barcode
        barcode($UPC,18,35,1,70,'UPC');
        
        barcodeTexto(1,0,0,0,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
