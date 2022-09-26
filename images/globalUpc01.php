<?php                      //   1      2       3      4
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'ZA202GL1');
        $COLOR = asignar(2,'PM BLACK');
        $SIZE = asignar(3,'M');
        $UPC = asignar(4,'123456789012');

        
        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        texto('Style:',20,20,0,0,$arialNBold,$black,10,0,0);
        texto($STYLE,70,20,0,0,$arial,$black,8,0,0);

        texto('Color:',20,40,0,0,$arialNBold,$black,10,0,0);
        texto($COLOR,70,40,0,0,$arial,$black,8,0,0);

        texto('Size:',20,60,0,0,$arialNBold,$black,10,0,0);
        texto($SIZE,70,60,0,0,$arial,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,15,50,1.4,70,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>