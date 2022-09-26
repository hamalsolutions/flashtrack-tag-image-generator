<?php                     //    1      2       3      4      5        6        7          8               9             10           11  
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','TRACKING','D/S/F','DESCRIPTION','REPLENISHMENT','SECURITY CODE','SEASON');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'PINK');
        $SIZE = asignar(2,'L/G (11-13)');
        $STYLE = asignar(3,'ST3048');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'$7.00');
        $TRACKING = asignar(6,'EPS-B70405-0511');
        $DSF = asignar(7,'24002424');
        $DESCRIPTION = asignar(8,'BOYS TODDLERS');
        $REPLENISHMENT = asignar(9,'POS');
        $CODE = asignar(10,'K2P032933535');
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
        $MyriadProCond = fuente('MYRIADPRO-COND.OTF');
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        $MyriadPro = fuente('MyriadPro-Regular.otf');
        
        // Introducimos los datos
        
        if (strpos($PRICE,'.'))
            if (substr($PRICE,strpos($PRICE,'.'),2) == 0)
                $PRICE = substr($PRICE,0,strpos($PRICE,'.'));
        texto($PRICE,0,35,1,0,$MyriadProBold,$black,19,90,1);
        
            $SIZE = str_replace(' ','',$SIZE);
            if (strpos($SIZE,'(')){
                $size1 = substr($SIZE,0,strpos($SIZE,'('));
                $size2 = substr($SIZE,strpos($SIZE,'('),strpos($SIZE,')'));
                $yPos = 80;
            } else {
                $size1 = $SIZE;
                $size2 = ' ';
                $yPos = 85;
            }
            for($i=1;$i<=2;$i++){
                texto($size1,0,$yPos,1,0,$MyriadProBold,$black,12,90,0);
                $yPos += 15;
                texto($size2,0,$yPos,1,0,$MyriadProBold,$black,12,90,0);
                $yPos += 109;
            }
        
        $yPos = 143;
        for($i=1;$i<=2;$i++){
            texto($DESCRIPTION,0,$yPos,1,0,strlen($DESCRIPTION)>9?$MyriadProCond:$MyriadProBold,$black,strlen($DESCRIPTION)>9?13:12,90,0);
            $yPos += 125;
        }
        
        texto($DSF,318,15,0,0,$MyriadPro,$black,7,0,0);
        
        texto($SEASON,320,27,0,0,$MyriadPro,$black,7,0,0);
        
        texto($COLOR,0,15,2,22,$MyriadPro,$black,7,0,0);
        
        texto($STYLE,0,27,2,22,$MyriadPro,$black,7,0,0);
        
        texto($REPLENISHMENT,empty($CODE)?362:325,38,0,0,$MyriadPro,$black,7,0,0);
        
        texto($CODE,0,38,2,25,$MyriadPro,$black,7,0,0);
        
        texto($TRACKING,340,92,0,0,$MyriadPro,$black,7,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>