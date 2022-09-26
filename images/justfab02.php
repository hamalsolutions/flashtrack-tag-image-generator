<?php                       //   1     2       3     4
    $correctos = array('QTY','NAME','COLOR','SIZE','SKU');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $NAME = asignar(1,'TUNIC LAYERING TOP');
        $COLOR = asignar(2,'HEATHER GREY');
        $SIZE = asignar(3,'XS');
        $SKU = asignar(4,'KT1618762-0124-44010');

        // Creacion del formato
        formato(400,200,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');

        // Introducimos los datos
        setAsSticker(15);

        texto('NAME: ',10,30,0,0,$arial,$black,10,0,0);
        texto($NAME,55,30,0,0,$arial,$black,14,0,0);

        texto('COLOR: ',10,60,0,0,$arial,$black,10,0,0);
        texto($COLOR,65,60,0,0,$arial,$black,14,0,0);

        texto('SIZE: ',290,60,0,0,$arial,$black,10,0,0);
        texto($SIZE,330,60,0,0,$arial,$black,14,0,0);

        imagerectangle($img,5,65,FORMAT_WIDTH-5,65,$black);

        texto('SKU: ',50,82,0,0,$arial,$black,10,0,0);
        texto($SKU,80,85,0,0,$arial,$black,14,0,0);

        // Creacion del Barcode
        barcode($SKU,15,90,1,95,'39');

        require_once('../includes/footer.php');
    }
?>