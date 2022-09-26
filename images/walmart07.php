<?php                     //    1      2       3      4      5      6        7          8         9        10        11
    $correctos = array('QTY','COLOR','SIZE','STYLE','UPC','PRICE','DEPT','SUBCLASS','FINELINE','SEASON','FABRIC','REP CODE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $COLOR = asignar(1,'CHOCOLATE');
        $SIZE = asignar(2,'S');
        $STYLE = asignar(3,'WRD-2164R');
        $UPC = asignar(4,'884411935638');
        $PRICE = asignar(5,'21.95');
        $DEPT = asignar(6,'24');
        $SUBCLASS = asignar(7,'43');
        $FINELINE = asignar(8,'004');
        $SEASON = asignar(9,'01-06');
        $FABRIC = asignar(10,'100% COTTON');
        $CODE = asignar(11,'EXCLUSIVE OF DECORATION');
        
            // Creacion del formato
        formato(175,500,245,245,245);
        
            // Colores a usar
        $black = color(0,0,0);
        $gray = color(245,245,245);
        $red = color(255,0,0);
        $transparent = transparente();
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        
        cajaRellena(2,60,170,308,$transparent,$transparent);
        
        texto($PRICE,0,40,1,0,$arialBold,$black,19,0,1);
        
        $yPos = 115;
        for($i=1;$i<=3;$i++){
            imagefilledellipse($img,85,$yPos,140,65,$gray);
            texto($SIZE,0,$yPos+10,1,0,$arialBold,$black,17,0,0);
            $yPos += 100;
        }
        
        texto($FABRIC,0,382,1,0,$arialBold,$black,10,0,0);
        
        texto($CODE,0,395,1,0,$arialBold,$black,8,0,0);
        
        texto($FINELINE,texto($SUBCLASS,texto($DEPT,7,410,0,0,$arialBold,$black,10,0,0)-4,410,0,0,$arialBold,$black,10,0,0)-4,410,0,0,$arialBold,$black,10,0,0);
        
        texto($SEASON,7,425,0,0,$arialBold,$black,10,0,0);
        
        texto($COLOR,0,410,2,5,$arialBold,$black,10,0,0);
        
        texto($STYLE,0,425,2,5,$arialBold,$black,10,0,0);
        
        
        // Creacion del Barcode
        barcode($UPC,31,430,1,50,'UPC');
        
        barcodeTexto(2,-1,-3,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>