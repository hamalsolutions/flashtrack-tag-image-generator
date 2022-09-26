<?php                      //   1      2       3      4     5      6      7       8       9
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','SUB','PRICE','DEPT','CLASS','ID-CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'NAVY');
        $SIZE = asignar(2,'MEDIUM');
        $STYLE = asignar(3,'WRD-039');
        $UPC = asignar(4,'871634000168');
        $SUB = asignar(5,'49');
        $PRICE = asignar(6,'46.00');
        $DEPT = asignar(7,'059');
        $CLASS = asignar(8,'60');
        $CODE = asignar(9,'PO311');
        
        // Creacion del formato
        formato(169,300,255,255,255);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('kohls_logo.ttf');
        
        // Introducimos los datos
        
        texto('K',0,55,1,0,$logo,$black,35,0,0);
        texto('kohls.com',0,69,1,0,$arialBold,$black,10,0,0);

        texto($DEPT,0,87,3,90,$arial,$black,12,0,0);        

        texto($CLASS,0,87,1,0,$arial,$black,12,0,0);
        
        texto($SUB,0,87,3,-90,$arial,$black,12,0,0);
        
        texto('STYLE',10,105,0,0,$arial,$black,7,0,0);
        texto($STYLE,55,105,0,0,$arial,$black,8.5,0,0);

        texto('COLOR',10,120,0,0,$arial,$black,7,0,0);
        texto($COLOR,55,120,0,0,$arial,$black,8.5,0,0);        

        texto('SIZE',10,135,0,0,$arial,$black,7,0,0);
        texto($SIZE,55,135,0,0,$arial,$black,8.5,0,0);        
        
        texto($CODE,0,145,2,10,$arial,$black,6,0,0);        

        texto('-- - - - - - - - - - - - - - - - - - - --',0,255,1,0,$arial,$black,10,0,0);        

        texto($PRICE,0,277,1,0,$arial,$black,14,0,1);
        
        // Creacion del Barcode
        barcode($UPC,8,122,1.3,108,'UPC');
        
        barcodeTexto(2,0,-2,5,'cour.ttf');
        
        require_once('../includes/footer.php');
    }
?>
