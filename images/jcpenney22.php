<?php                      //   1       2     3       4      5         6         7     8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','GROUP NAME','SUB','LOT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLACK');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'8410Q543T1');
        $UPC = asignar(4,'797130589795');
        $PRICE = asignar(5,'13.00');
        $GROUP = asignar(6,'ESSENTIAL');
        $SUB = asignar(7,'216');
        $LOT = asignar(8,'1918');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $red = color(255,0,0);
        $white = color(255,255,255);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNarrow = fuente('arialn.ttf');
        
        // Introducimos los datos
        texto('STYLE',10,60,0,0,$arial,$black,9,0,0);
        texto($STYLE,10,72,0,0,$arialNarrow,$black,8,0,0);
        
        texto('COLOR',100,60,0,0,$arial,$black,9,0,0);
        texto($COLOR,0,72,2,7,$arialNarrow,$black,8,0,0);
        
        texto($SUB.'-'.$LOT,0,100,1,0,$arial,$black,9,0,0);
        
        texto($GROUP,0,115,1,0,$arial,$black,9,0,0);
        
        texto('SIZE '.$SIZE,0,227,1,0,$arial,$black,13,0,0);
        
       $PRICE = sinSigno($PRICE);
        $PRICE = str_replace('.00','',$PRICE);
        if ($PRICE=='13'||$PRICE=='20'||$PRICE=='25'||$PRICE=='30'||$PRICE=='35'||$PRICE=='40'||$PRICE=='45'||$PRICE=='60'||$PRICE=='17'||$PRICE=='15'){
            cajaRellena(64,266,38,22,$red,$red);
            $start = texto($PRICE,0,285,1,0,$arial,$white,14,0,0);
            texto('$',$start-6,280,0,0,$arial,$white,10,0,0);
        }
        
        
        // Creacion del Barcode
        barcode($UPC,9,95,1.3,95,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
