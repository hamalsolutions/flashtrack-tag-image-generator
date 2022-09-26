<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS','GROUP NAME');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'BLUE');
        $SIZE = asignar(2,'XL');
        $STYLE = asignar(3,'2677EK8CT1');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'80');
        $PRICE = asignar(6,'58.00');
        $DEPT = asignar(7,'044');
        $CLASS = asignar(8,'80');
        $GROUPNAME = asignar(9,'BERRY BORDEAUX');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,69,1,0,$arialBold,$black,18,0,0);

        texto($DEPT,0,90,3,60,$arial,$black,12,0,0);        

        texto($CLASS,0,90,1,0,$arial,$black,12,0,0);
        
        texto($SUB,0,90,3,-60,$arial,$black,12,0,0);
        
        texto('STYLE  '.$STYLE,0,106,1,0,$arial,$black,8,0,0);

        texto('COLOR  '.$COLOR,0,121,1,0,$arial,$black,8,0,0);
        
        texto($GROUPNAME,0,139,1,0,$arial,$black,8,0,0);        

        texto('SIZE  '.$SIZE,0,155,1,0,$arial,$black,9,0,0);        

        perforacion();

        texto($PRICE,0,277,1,0,$arial,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,128,1.3,100,'UPC');
        
        barcodeTexto(1, 0, -2, 5, 'arial.ttf');
        
        require_once('../includes/footer.php');

    }
?>
