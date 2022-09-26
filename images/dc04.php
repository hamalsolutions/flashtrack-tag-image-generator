<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS','PCS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {

        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'YELLOW');
        $SIZE = asignar(2,'4T');
        $STYLE = asignar(3,'KOH7000');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'41');
        $PRICE = asignar(6,'30.00');
        $DEPT = asignar(7,'351');
        $CLASS = asignar(8,'40');
        $PCS = asignar(9,'2');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('DC_Logo.ttf'); 
        
        // Introducimos los datos
        texto('D',0,70,1,0,$logo,$black,45,0,0);
        texto('®',116,30,0,0,$arialBold,$black,7,0,0);

        texto($DEPT,0,100,3,90,$arial,$black,12,0,0);        

        texto($CLASS,0,100,1,0,$arial,$black,12,0,0);
        
        texto($SUB,0,100,3,-90,$arial,$black,12,0,0);
        
        texto('STYLE  '.$STYLE,0,115,1,0,$arial,$black,10,0,0);

        texto('COLOR  '.$COLOR,0,130,1,0,$arial,$black,10,0,0);        

        texto('SIZE  '.$SIZE,0,145,1,0,$arial,$black,10,0,0);        
        
        if ($PCS <> '')
            texto($PCS.' PC',0,160,1,0,$arial,$black,10,0,0);        

        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);        

        texto($PRICE,0,277,1,0,$arial,$black,12,0,1);        

        // Creacion del Barcode
        barcode($UPC,8,130,1.3,98,'UPC');
        
        barcodeTexto(2,-1,-2,4,'cour.ttf');
        
        require_once('../includes/footer.php');

    }
?>
