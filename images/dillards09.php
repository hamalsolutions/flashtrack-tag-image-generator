<?php                      //   1       2       3     4      5
    $correctos = array('QTY','STYLE','COLOR','SIZE','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $STYLE = asignar(1,'F4247-010');
        $COLOR = asignar(2,'WHITE');
        $SIZE = asignar(3,'SMALL');
        $UPC = asignar(4,'715209136190');
        $PRICE = asignar(5,'49.99');
        
            // Creacion del formato
        formato(169,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $CourNewB = fuente('courbd.ttf');
        $arialBlack = fuente('ariblk.ttf');
        
        // Introducimos los datos
        agujero(85, 25);
        
        texto('STYLE',12,75,0,0,$CourNewB,$black,8,0,0);
        texto($STYLE,52,75,0,0,$CourNewB,$black,8,0,0);
        
        texto('COLOR',12,100,0,0,$CourNewB,$black,8,0,0);
        parrafo($COLOR, 52, 100, 0, 0, $CourNewB, $black, 8, 0, 15, 12);
        
        texto('SIZE',12,125,0,0,$CourNewB,$black,8,0,0);
        texto($SIZE,52,125,0,0,$CourNewB,$black,8,0,0);

        texto($PRICE, 0, 275, 1, 0, $arialBlack, $black, 17, 0, 0);
        
        // Creacion del Barcode
        barcode($UPC,13,120,1.2,80,'UPC');
        
        barcodeTexto(2,0,0,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
