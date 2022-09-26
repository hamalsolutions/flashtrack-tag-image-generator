<?php                      //   1       2       3     4     5  
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'6NBN2');
        $COLOR = asignar(2,'SILVER');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$26.95');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('Style #',15,65,0,0,$arial,$black,8,0,0);
        texto($STYLE,50,65,0,0,$arial,$black,8,0,0);
        
        texto('Color:',15,82,0,0,$arial,$black,8,0,0);
        parrafo($COLOR, 50, 82, 0, 0, $arial, $black, 8, 0, 22, 13);
        
        texto('Size '.$SIZE,0,183,1,0,$arial,$black,10,0,0);
        
        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arialBold,$black,10,0,0);
        
        texto($PRICE,0,285,1,0,$arialBold,$black,16,0,1);
        
        // Creacion del Barcode
        barcode($UPC,28,100,1,60,'UPC');
        
        barcodeTexto(1,-1,-4,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
