<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'YELLOW');
        $SIZE = asignar(2,'Small');
        $STYLE = asignar(3,'TS0XE4BTM');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'14');
        $PRICE = asignar(6,'20.00');
        $DEPT = asignar(7,'059');
        $CLASS = asignar(8,'10');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('kohlsBioworldLogo.ttf');
        
        // Introducimos los datos
        texto('K',0,55,1,0,$logo,$black,25,0,0);
        texto('Kohls.com',0,67,1,0,$arialBold,$black,10,0,0);

        texto($DEPT,0,87,3,90,$arialBold,$black,12,0,0);        

        texto($CLASS,0,87,1,0,$arialBold,$black,12,0,0);
        
        texto($SUB,0,87,3,-90,$arialBold,$black,12,0,0);
        
        texto('STYLE',20,107,0,0,$arial,$black,9,0,0);
        texto($STYLE,70,107,0,0,$arial,$black,9,0,0);

        texto('COLOR',20,125,0,0,$arial,$black,9,0,0);        
        texto($COLOR,70,125,0,0,$arial,$black,9,0,0);        

        texto('SIZE:',35,150,0,0,$arial,$black,9,0,0);        
        texto($SIZE,70,150,0,0,$arial,$black,9,0,0);        

        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);        

        texto($PRICE,0,279,1,0,$arial,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,125,1.3,103,'UPC');
        
        barcodeTexto(1,-1,-2,4,'arial.ttf');
        
        require_once('../includes/footer.php');

    }
?>
