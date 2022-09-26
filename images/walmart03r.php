<?php                     //    1      2       3      4      5       6       7
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','SUB','FINELINE','SEASON','REPLENISHMENT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHOCOLATE');
        $SIZE = asignar(2,'S/C - 3/5');
        $STYLE = asignar(3,'WRD-2164R');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'7.00');
        $DEPT = asignar(6,'24');
        $SUB = asignar(7,'00');
        $FINELINE = asignar(8,'2424');
        $SEASON = asignar(9,'01-06');
        $REPLENISHMENT = asignar(10,'POS');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        texto($PRICE,0,42,1,0,$arialBold,$black,19,90,1);
        
        $SIZE = str_replace(' ', '', $SIZE);
        $sizeTextArray = explode('-', $SIZE);
        $size1 = $sizeTextArray[0];
        $size2 = $sizeTextArray[1];
        $yPos = 80;
        
        for($i=1;$i<=4;$i++){
            //$fontColor = ($SIZE=='M(8)'||$SIZE=='M/M(8)')?$black:$white;
            texto($size1,0,$yPos,1,0,$arialBold,$black,12,90,0);
            $yPos += 15;
            texto($size2,0,$yPos,1,0,$arialBold,$black,12,90,0);
            $yPos += 47;
        }
        
        /*$yPos = 90;
        for($i=1;$i<=4;$i++){
            texto($SIZE,0,$yPos,1,0,$arialBold,$black,8.5,90,0);
            $yPos += 65;
        }*/
        if ($DEPT && $SUB && $FINELINE) {
            texto($FINELINE,texto($SUB,texto($DEPT,310,15,0,0,$arial,$black,7,0,0)-8,15,0,0,$arial,$black,7,0,0)-8,15,0,0,$arial,$black,7,0,0);
            texto($COLOR,360,15,0,0,$arial,$black,7,0,0);
        } else {
            texto($COLOR,360,15,2,10,$arial,$black,  strlen($COLOR)>30?6:7,0,0);
        }
        
        texto($SEASON,310,27,0,0,$arial,$black,7,0,0);
        
        
        
        texto($STYLE,360,27,0,0,$arial,$black,7.5,0,0);
        
        texto($REPLENISHMENT,359,38,0,0,$arial,$black,6,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,310,1,43,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>