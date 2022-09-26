<?php                       //   1       2       3     4       5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','DESCRIPTION','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'1RTRO4062');
        $COLOR = asignar(2,'PAPRIKA');
        $SIZE = asignar(3,'XXL');
        $UPC = asignar(4,'884616098831');
        $DESCRIPTION = asignar(5,'MENS S/S TEE');
        $PRICE = asignar(6,'24.00');
                
        // Creacion del formato
        formato(200,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $recycleLogo = fuente('Recycle_Symbol.ttf');
        
        // Introducimos los datos
        
        setAsSticker(10);
        
        texto($STYLE,0,27,1,0,$arial,$black,10,0,0);
        
        texto($SIZE,0,42,1,0,$arial,$black,10,0,0);
        
        texto($COLOR,0,60,1,0,$arial,$black,10,0,0);
        
        texto($DESCRIPTION,0,77,1,0,$arial,$black,10,0,0);
        
        texto(formatizarTexto('1 2 3 4 5 6   7 8 9 0 1 2', $UPC),0,142,1,0,$arial,$black,9,0,0);
        
        texto('BELK.COM',0,160,1,0,$arial,$black,9,0,0);
        
        texto('PAPER MADE FROM RECYCLED MATERIALS',20,175,0,0,$arial,$black,6,0,0);
        texto('R',5,175,0,0,$recycleLogo,$black,10,0,0);
        
        texto($PRICE,0,195,1,0,$arial,$black,12,0,1);
        
         // Creacion del Barcode
        barcode($UPC,11,55,1.5,75,'UPC');
        
        //barcodeTexto(1.5,-1,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
