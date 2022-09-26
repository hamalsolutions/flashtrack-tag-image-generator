<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'WOZJ13286NBN2');
        $COLOR = asignar(2,'SILVER');
        $SIZE = asignar(3,'XL');
        $UPC = asignar(4,'400012290619');
        $PRICE = asignar(5,'$26.95');
        
            // Creacion del formato
        formato(150,275,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $bookman = fuente('bookos.ttf');
        
        // Introducimos los datos
        texto('FRED MEYER',0,40,1,0,$bookman,$black,11,0,0);
        
        texto('STYLE:',15,58,0,0,$arial,$black,7,0,0);
        texto($STYLE,60,58,0,0,$arial,$black,7,0,0);
        
        texto('COLOR',15,72,0,0,$arial,$black,7,0,0);
        parrafo($COLOR, 55, 72, 0, 0, $arial, $black, 7, 0, 15, 10);
        
        texto('SIZE',15,93,0,0,$arial,$black,7,0,0);
        texto($SIZE,48,93,0,0,$arial,$black,7,0,0);
        
        texto(formatizarTexto('123456    123456',$UPC),0,170,1,0,$arial,$black,9,0,0);
        
        texto($PRICE,0,260,1,0,$arialBold,$black,15,0,1);
        
        // Creacion del Barcode
        barcode($UPC,20,100,1,55,'UPC');
        
        require_once('../includes/footer.php');
    }
?>
