<?php                      //   1       2      3      4      5
    $correctos = array('QTY','STYLE','ITEM','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ML8209224');
        $ITEM = asignar(2,'10294909003');
        $SIZE = asignar(3,'S/P');
        $UPC = asignar(4,'846671011194');
        $PRICE = asignar(5,'$14.99');
        
            // Creacion del formato
        formato(125,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto($STYLE,0,70,1,0,$arial,$black,9,0,0);
        
        texto($ITEM,0,90,1,0,$arial,$black,9,0,0);
        
        texto($SIZE,0,225,1,0,$arialBold,$black,14,0,0);
        
        perforacion(125, 275, 235);
        
        $priceArray = explode('.', str_replace(' ', '', sinSigno($PRICE)));
        texto($priceArray[0],0,265,2,53,$arialBold,$black,14,0,0);
        texto($priceArray[1],0,259,2,35,$arialBold,$black,8,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,6,110,1,55,'UPC');
        
        barcodeTexto(2,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
