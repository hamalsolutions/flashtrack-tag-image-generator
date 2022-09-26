<?php                      //      1         2      3       4      5      6      7       8      9       10
    $correctos = array('QTY','COLOR CODE','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','CLASS','SUB','DESCRIPTION');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLORCODE = asignar(1,'323');
        $COLOR = asignar(2,'MOCHA HEATHER');
        $SIZE = asignar(3,'S(4)');
        $STYLE = asignar(4,'BLFIDO');
        $UPC = asignar(5,'845550607190');
        $PRICE = asignar(6,'15.00');
        $DEPT = asignar(7,'24');
        $CLASS = asignar(8,'50');
        $SUB = asignar(9,'12');
        $DESCRIPTION = asignar(10,'DESCRIPTION  FIELD');
        
        // Creacion del formato
        formato(225,87,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto('KOHL\'S',0,25,1,0,$arialBold,$black,11,90,0);
        texto('Kolhs.com',0,35,1,0,$arialBold,$black,6,90,0);
        
        texto($DESCRIPTION,0,83,3,-20,$arial,$black,6.5,0,0);
        
        texto($DEPT,0,36,3,60,$arialBold,$black,7,0,0);
        
        texto($CLASS,0,36,3,-10,$arialBold,$black,7,0,0);
        
        texto($SUB,0,36,3,-90,$arialBold,$black,7,0,0);        
        
        texto('STYLE',70,25,0,0,$arial,$black,7,0,0);
        texto($STYLE,110,25,0,0,$arial,$black,7,0,0);
        
        texto($COLORCODE,76,15,0,0,$arial,$black,6.5,0,0);
        texto($COLOR,100,15,0,0,$arial,$black,6.5,0,0);
        
        texto('SIZE '.$SIZE,0,51,1,0,$arial,$black,8,90,0);
        
        texto($PRICE,0,210,1,0,$arial,$black,10,90,1);
        
        
        // Creacion del Barcode
        barcode($UPC,50,65,1,28,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>