<?php                     //    1      2       3      4      5      6       7          8         9      10         11  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','SIZE#','DEPT','DESCRIPTION','SUB','FINELINE','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE_W = asignar(2,'L/G');
        $STYLE = asignar(3,'ST3048');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'$7.00');
        $SIZE_N = asignar(6,'11-13');
        $DEPT = asignar(7,'24');
        $DESCRIPTION = asignar(8,'S/S TEE');
        $SUB = asignar(9,'00');
        $FINELINE = asignar(10,'2424');
        $SEASON = asignar(11,'01-06');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        $MyriadPro = fuente('MyriadPro-Regular.otf');
        
        // Introducimos los datos
        
        texto($PRICE,0,35,1,0,$MyriadProBold,$black,19,90,1);
        
            $yPos = 80;
            for($i=1;$i<=4;$i++){
                texto($SIZE_W,0,$yPos,1,0,$MyriadProBold,$black,12,90,0);
                $yPos += 15;
                texto('('.$SIZE_N.')',0,$yPos,1,0,$MyriadProBold,$black,12,90,0);
                $yPos += 47;
            }
        
        $DESCRIPTION = str_replace(' ','  ',$DESCRIPTION);
        texto($DESCRIPTION,0,310,1,0,$MyriadProBold,$black,strlen($DESCRIPTION)>20?4:5.4,90,0);
        
        texto($FINELINE,texto($SUB,texto($DEPT,318,15,0,0,$MyriadPro,$black,7,0,0)-8,15,0,0,$MyriadPro,$black,7,0,0)-8,15,0,0,$MyriadPro,$black,7,0,0);
        
        texto($SEASON,320,27,0,0,$MyriadPro,$black,7,0,0);
        
        texto($COLOR,0,15,2,22,$MyriadPro,$black,7,0,0);
        
        texto($STYLE,0,27,2,22,$MyriadPro,$black,7,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>