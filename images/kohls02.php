<?php                      //   1      2       3      4     5      6      7       8
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHARCOAL/BLACK');
        $SIZE = asignar(2,'SMALL');
        $STYLE = asignar(3,'4HK271GLS1173B');
        $UPC = asignar(4,'845550607190');
        $SUB = asignar(5,'12');
        $PRICE = asignar(6,'26.00');
        $DEPT = asignar(7,'24');
        $CLASS = asignar(8,'50');
        
        // Creacion del formato
        formato(188,150,255,255,255,270);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 270;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',0,28,1,0,$arialBold,$black,20,270,0);
        
        texto($DEPT,0,48,3,60,$arialBold,$black,12,270,0);
        
        texto($CLASS,0,48,1,0,$arialBold,$black,12,270,0);
        
        texto($SUB,0,48,3,-60,$arialBold,$black,12,270,0);
        
        texto('STYLE',67,68,0,0,$arial,$black,7,270,0);
        texto($STYLE,67,78,0,0,$arial,$black,7,270,0);
        
        texto('COLOR',67,98,0,0,$arial,$black,7,270,0);
        texto($COLOR,67,108,0,0,$arial,$black,6.5,270,0);
        
        texto('SIZE',67,128,0,0,$arial,$black,7,270,0);
        texto($SIZE,67,138,0,0,$arial,$black,7,270,0);
        
        texto($PRICE,0,168,3,-60,$arial,$black,12,270,1);
        
        
        // Creacion del Barcode
        barcode($UPC,10,174,1,40,'UPC',270);
        
        barcodeTexto(2,-1,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>