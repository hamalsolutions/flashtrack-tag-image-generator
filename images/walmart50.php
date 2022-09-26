<?php                     //    1      2       3      4      5        6        7          8               9             10           11  
    $correctos = array('QTY','SEASON','D/S/F','COLOR','UPC','STYLE','STYLE NAME','SIZE','PRICE','REP CODE','LOT','TRACKING','SECURITY CODE','REPLENISHMENT');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SEASON = asignar(1,'03-14');
        $DSF = asignar(2,'26006844');
        $COLOR = asignar(3,'YELLOW');
        $UPC = asignar(4,'888823022238');
        $STYLE = asignar(5,'MB2TDME306');
        $STYLENAME = asignar(6,'FACE TIME');
        $PRICE = asignar(7,'$5.88');
        $REPCODE = asignar(8,'POS');
        $LOT = asignar(9,'WM21274');
        $SIZE = asignar(10,'5T/NP5');
        $TRACKING = asignar(11,'123456');
        $CODE = asignar(12,'XXXX');
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $SIZE = str_replace(' ','',$SIZE);
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
                $yPos = 80;
            } else {
                $size1 = $SIZE;
                $size2 = ' ';
                $yPos = 85;
            }
            for($i=1;$i<=4;$i++){
                $fontColor = ($SIZE=='4T/NP4')?$black:$white;
                texto($size1,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 15;
                texto($size2,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 47;
            }
        
        texto($STYLENAME,0,310,1,0,$MyriadProBold,$black,strlen($STYLENAME)>20?4:6,90,0);
        
        texto($DSF,318,15,0,0,$MyriadPro,$black,7,0,0);
        
        texto($SEASON,320,27,0,0,$MyriadPro,$black,7,0,0);
        
        texto($COLOR,0,15,2,15,$MyriadPro,$black,7,0,0);
        
        texto($STYLE,0,27,2,15,$MyriadPro,$black,7,0,0);
        
        texto($REPCODE,empty($CODE)?362:325,38,0,0,$MyriadPro,$black,strlen($CODE)>12?6:7,0,0);
        //texto('POS',325,38,0,0,$MyriadPro,$black,7,0,0);
        
        texto($CODE,0,38,2,strlen($CODE)>12?20:25,$MyriadPro,$black,  strlen($CODE)>12?6:7,0,0);
        
        texto($TRACKING,0,92,3,-300,$MyriadPro,$black,7,0,0);
        
        texto('Walmart.com',0,442,1,0,$MyriadProBold,$black,6,90,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>