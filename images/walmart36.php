<?php                     //    1      2          3          4       5        6        7         8      9         10 
    $correctos = array('QTY','SIZE','COLOR','DESCRIPTION','STYLE','SEASON','D/S/F','TRACKING','PRICE','UPC','REPLENISHMENT');
  
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $SIZE = asignar(1,'XS/XCH (4-5)');
        $COLOR = asignar(2,'YELLOW');
        $DESCRIPTION = asignar(3,'Soft Kitty Multiple Poses');
        $STYLE = asignar(4,'PBLJAN-16');
        $SEASON = asignar(5,'01-13');
        $DSF = asignar(6,'24002424');
        $TRACKING = asignar(7,'123456');
        $PRICE = asignar(8,'$7.00');
        $UPC = asignar(9,'767695837648');
        $REPLENISHMENT = asignar(10,'POS');
        
        
        // Creacion del formato
        formato(450,100,255,255,255,90);
        
        // Si requiere rotar la imagen ( TODA LA IMAGEN )
        $anguloDeRotacion = 90;
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        $SIZE = str_replace(' ','',$SIZE);
        $vicsColor = colorVicGirls($SIZE);
        
            // Fuentes a usar
        $MyriadProBold = fuente('MyriadPro-Bold.otf');
        $MyriadPro = fuente('MyriadPro-Regular.otf');
        
        // Introducimos los datos
        /*
        if (strpos($PRICE,'.'))
            if (substr($PRICE,strpos($PRICE,'.'),2) == 0)
                $PRICE = substr($PRICE,0,strpos($PRICE,'.')); */
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
                $fontColor = ($SIZE=='L/G(10-12)')?$black:$white;
                texto($size1,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 15;
                texto($size2,0,$yPos,1,0,$MyriadProBold,$fontColor,12,90,0);
                $yPos += 47;
            }
        
        $DESCRIPTION = str_replace(' ','  ',$DESCRIPTION);
        texto($DESCRIPTION,0,310,1,0,$MyriadProBold,$black,strlen($DESCRIPTION)>20?4:5.4,90,0);
        
        texto($DSF,318,15,0,0,$MyriadPro,$black,7,0,0);
        
        texto($SEASON,320,27,0,0,$MyriadPro,$black,7,0,0);
        
        texto($COLOR,0,15,2,15,$MyriadPro,$black,7,0,0);
        
        texto($STYLE,0,27,2,15,$MyriadPro,$black,7,0,0);
        
        texto($REPLENISHMENT,337,40,0,0,$MyriadPro,$black,7,0,0);
        
        texto($TRACKING,365,92,0,0,$MyriadPro,$black,7,0,0);
        
        texto('Walmart.com',0,442,1,0,$MyriadProBold,$black,6,90,0);
        
        
        // Creacion del Barcode
        barcode($UPC,60,320,1,35,'UPC',90);
        
        barcodeTexto(2,-1,-4,7,'OCR-B_SB.ttf');
        
        require_once('../includes/footer.php');
    }
?>