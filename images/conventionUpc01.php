<?php                      //   1          2           3      4     5
    $correctos = array('QTY','STYLE','DESCRIPTION','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'MUNL968GL1');
        $DESCRIPTION = asignar(2,'OBEY CTHULHU');
        $COLOR = asignar(3,'BLACK');
        $SIZE = asignar(4,'S');
        $UPC = asignar(5,'123456789012');


        // Creacion del formato
        formato(200,150,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialNBold = fuente('arialnb.ttf');
        
        // Introducimos los datos
        texto('Style: '.$STYLE,10,20,0,0,$arial,$black,8,0,0);

        texto('Desc: '.$DESCRIPTION,10,40,0,0,$arial,$black,8,0,0);

        texto('Color: '.$COLOR,10,60,0,0,$arial,$black,8,0,0);

        texto('Size: '.$SIZE,20,60,2,10,$arial,$black,8,0,0);

        // Creacion del Barcode
        barcode($UPC,15,50,1.4,75,'UPC');
        
        barcodeTexto(1, 0, -1, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>