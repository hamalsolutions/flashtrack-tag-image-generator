<?php                      //   1      2       3      4       5          6           7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','DESCRIPTION','PRICE','SEASON','DEPT','SUB','FINELINE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $COLOR = asignar(1,'Orange');
        $SIZE = asignar(2,'XS/ECH-4/5');
        $STYLE = asignar(3,'MBGENE0193');
        $UPC = asignar(4,'883096085164');
        $DESCRIPTION = asignar(5,'Homework');
        $PRICE = asignar(6,'4.88');
        $SEASON = asignar(7,'00-13');
        $DEPT = asignar(8,'26');
        $SUB = asignar(9,'00');
        $FINELINE = asignar(10,'8002');
                
        // Creacion del formato
        formato(200,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $purple = color(47,38,135);
        $gray = color(125,111,116);
        $transparent = transparente();
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $logo = fuente('gildan_logo.ttf');
        
        // Introducimos los datos
        
        imagefilledellipse($img,105,20,15,15,$transparent);
        imageellipse($img,105,20,15,15,$gray);
        
        texto('H',0,79,1,0,$logo,$gray,65,0,0);
        
        texto('g',0,79,1,0,$logo,$purple,65,0,0);
        
        texto($DESCRIPTION,0,95,1,0,$arial,$black,12,0,0); 
        
        texto($SIZE,0,118,1,0,$arialBold,$black,15,0,0);
        
        texto($COLOR,0,140,1,0,$arial,$black,12,0,0);
        
        texto($PRICE,0,170,1,0,$arialBold,$black,24,0,1);
        
        texto($SEASON,0,190,3,100,$arial,$black,10,0,0);
        
        texto($DEPT,0,190,3,-20,$arial,$black,10,0,0);
        texto($SUB,0,190,3,-60,$arial,$black,10,0,0);
        texto($FINELINE,0,190,3,-117,$arial,$black,10,0,0);
        
        texto($STYLE,0,290,1,0,$arial,$black,9,0,0);
        
          // Creacion del Barcode
        barcode($UPC,35,180,1.1,80,'UPC');
        
        barcodeTexto(1,-1,-2,5,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>
