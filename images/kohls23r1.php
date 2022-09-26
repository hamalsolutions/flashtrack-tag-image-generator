<?php                      //   1      2       3      4     5      6      7       8      9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS','PCS',);
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'YELLOW');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'KOH7000');
        $UPC = asignar(4,'638325782358');
        $SUB = asignar(5,'41');
        $PRICE = asignar(6,'30.00');
        $DEPT = asignar(7,'351');
        $CLASS = asignar(8,'40');
        $PCS = asignar(9,'2PC');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,55,1,0,$arialBold,$black,18,0,0);

        texto('Kohls.com',0,69,1,0,$arialBold,$black,10,0,0);

        texto($DEPT,0,84,3,90,$arialBold,$black,12,0,0);

        texto($CLASS,0,84,1,0,$arialBold,$black,12,0,0);
        
        texto($SUB,0,84,3,-90,$arialBold,$black,12,0,0);
        
        texto('STYLE  '.$STYLE,0,104,1,0,$arialBold,$black,8,0,0);

        texto('COLOR  '.$COLOR,0,122,1,0,$arialBold,$black,8,0,0);

        texto('SIZE  '.$SIZE,0,142,1,0,$arialBold,$black,8,0,0);

        texto($PCS,0,160,1,0,$arialBold,$black,8,0,0);

        texto('-- - - - - - - - - - - - - - - - - - - --',0,262,1,0,$arial,$black,10,0,0);

        texto($PRICE,0,288,1,0,$arialBold,$black,12,0,1);

        // Creacion del Barcode
        barcode($UPC,8,133,1.3,103,'UPC');
        
        barcodeTexto(2,-1,-2,4,'arialbd.ttf');
        
        require_once('../includes/footer.php');

    }
?>
