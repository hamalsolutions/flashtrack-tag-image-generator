<?php                     //    1      2       3      4      5        6        7          8               9             10           11  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','D/S/F','SEASON','REPLENISHMENT','DESCRIPTION','TRACKING');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE = asignar(2,'3XL (54/56)');
        $STYLE = asignar(3,'ST3048');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'$7.00');
        $DSF = asignar(6,'24002424');
        $SEASON = asignar(7,'01-06');
        $REPLENISHMENT = asignar(8,'POS');
        $DESCRIPTION = asignar(9,'Soft Kitty Multiple Poses');
        $TRACKING = asignar(10,'123456');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        if (strpos($SIZE,'(')){
            $SIZE = str_replace(' ','',$SIZE);
        } else {
            $SIZE = str_replace(' ','(',$SIZE);
            $SIZE .= ')';
        }
        $vicsColor = colorVic($SIZE);
        
            // Fuentes a usar
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        $MyriadPro = fuente('MyriadPro-Regular.otf');
        
        // Introducimos los datos
       
        texto($PRICE,0,35,1,0,$MyriadProBold,$black,19,90,1);
        
        cajaRellena(1,155,97,240,$vicsColor,$vicsColor,90);
            
            if (strpos($SIZE,'(')){
                $size1 = substr($SIZE,0,strpos($SIZE,'('));
                $size2 = substr($SIZE,strpos($SIZE,'('),strpos($SIZE,')'));
                $badChars = array('(',')');
                $size2 = str_replace($badChars,'',$size2);
                $yPos = 80;
            } else {
                $size1 = $SIZE;
                $size2 = ' ';
                $yPos = 85;
            }
            for($i=1;$i<=4;$i++){
                $fontColor = ($SIZE=='L(42/44)')?$black:$white;
                texto($size1,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 15;
                texto($size2,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 47;
            }
        $DESCRIPTION = str_replace(' ','  ',$DESCRIPTION);
        texto($DESCRIPTION,0,310,1,0,$MyriadProBold,$black,strlen($DESCRIPTION)>20?5:6,90,0);
        
        texto($DSF,318,15,0,0,$MyriadPro,$black,7,0,0);
        
        texto($SEASON,320,27,0,0,$MyriadPro,$black,7,0,0);
        
        texto($COLOR,0,15,2,22,$MyriadPro,$black,7,0,0);
        
        texto($STYLE,0,27,2,22,$MyriadPro,$black,7,0,0);
        
        texto($REPLENISHMENT,0,37,3,-300,$MyriadPro,$black,7,0,0);
        
        texto($TRACKING,365,92,0,0,$MyriadPro,$black,7,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>